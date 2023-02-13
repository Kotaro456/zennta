<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-indigo-100">
<header class="text-gray-600 body-font border-b border-indigo-200">
    <div class="container mx-auto flex flex-wrap py-2 flex-col md:flex-row items-center justify-between">
        <a href="#" class="flex title-font items-center font-semibold rounded-full hover:bg-white text-4xl mb-4 md:mb-0 border-0 py-3 px-3">
            ←
        </a>

        <div class="w-80 flex justify-between">
            <button
                id="publishOrPrivate"
                class="publish w-36 text-center bg-violet-600 border-0 py-2 px-3 focus:outline-none hover:bg-violet-400 rounded text-base text-white font-semibold mt-4 md:mt-0">
                公開
            </button>
            <button
                id="updateArticle"
                class="w-36 text-center bg-violet-600 border-0 py-2 px-3 focus:outline-none hover:bg-violet-400 rounded text-base text-white font-semibold mt-4 md:mt-0">
                下書き保存/更新
            </button>
        </div>
    </div>
</header>
<div class="content text-black body-font">
    <form id="articleForm" class="flex justify-between w-4/5 mx-auto pt-12">
        @csrf
        <div class="main-form basis-2/3">
            <input id="articleId" type="hidden" value="{{ $article->id }}" />
            <input id="articleTitle" type="text" name="title" placeholder="Title" value="{{ $article->title }}" class="border-none outline-none w-full text-2xl" />
            <textarea id="articleBody" class="h-192 w-full mt-12 p-8 text-xl border rounded-xl overflow-hidden resize-none focus:border-blue-500 ring-1 ring-transparent focus:ring-blue-500 focus:outline-none text-black transition ease-in-out duration-300">{{ $article->body }}</textarea>
        </div>
        <div class="side-form basis-1/4">
            <div>
                <label for="articleCategory">Category:</label>
                <select name="category" id="articleCategory">
                    <option value="">-- Set Category --</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ $article->category_id === $category->id ? "selected" : "" }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <p>Tag:</p>
                <div id="articleTag" class="z-10 bg-white rounded-lg shadow mt-2">
                    <ul class="h-48 px-5 pb-3 overflow-y-auto text-sm text-gray-700" aria-labelledby="articleTag">
                        @foreach($tags as $tag)
                            <li class="cursor-pointer">
                                <div class="flex items-center p-2 rounded cursor-pointer hover:bg-slate-200">
                                    <input id="{{ $tag->key . "Tag" }}" type="checkbox" name="tag" value="{{ $tag->id }}"
                                           {{ in_array($tag->id, $articleTags) ? "checked" : "" }}
                                           class="w-4 h-4 text-blue-600  border-gray-300 rounded cursor-pointer focus:ring-blue-500 focus:ring-2">
                                    <label for="{{ $tag->key . "Tag" }}" class="w-full ml-2 text-sm font-medium cursor-pointer rounded">{{ $tag->name }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="module">
    $(document).ready(function () {
        const loadingEl = '<div class="animate-spin h-5 w-5 border-4 border-white-500 rounded-full border-t-transparent relative bottom-0 left-12"></div>'
        $('#updateArticle').on('click', function () {
            const articleId = $('#articleForm #articleId').val();

            $(this).html(loadingEl)
            //ajaxでのcsrfトークン送信
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            const tagIds = [];
            $(':checkbox[name="tag"]:checked').each(function() {
                tagIds.push($(this).val())
            })

            const data = {
                id   : articleId,
                title: $('#articleForm #articleTitle').val(),
                body : $('#articleForm #articleBody').val(),
                category_id : $('#articleForm #articleCategory').val(),
                tagIds: tagIds,
            }

            $.ajax({
                url : `/update/${articleId}`,
                type: "POST",
                data: data,
            }).then((res) => {
                $(this).html('下書き保存/更新')
            }).catch((error) => {
                if (error.status === 422) {
                    alert('エラー：タイトルと本文は必須です。')
                }
                console.log(error.status)
                console.log(error)
                $(this).html('下書き保存/更新')
            })
        })
        $('#publishOrPrivate').on('click', function () {
            const articleId = $('#articleForm #articleId').val();

            $(this).html(loadingEl)

            //ajaxでのcsrfトークン送信
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            if($(this).hasClass("publish")) {

                $.ajax({
                    url : `/updatePublication/${articleId}/1`,
                    type: "POST",
                }).then((res) => {
                    $(this).removeClass("publish")
                    $(this).addClass("private")
                    $(this).html('非公開')
                }).catch((error) => {
                    if (error) {
                        alert('エラー：予期せぬ不具合が発生しました。')
                    }
                    console.log(error.status)
                    console.log(error)
                    $(this).removeClass("private")
                    $(this).addClass("publish")
                    $(this).html('公開')
                })

            }else if($(this).hasClass("private")) {

                $.ajax({
                    url : `/updatePublication/${articleId}/0`,
                    type: "POST",
                }).then((res) => {
                    $(this).removeClass("private")
                    $(this).addClass("public")
                    $(this).html('公開')
                }).catch((error) => {
                    if (error) {
                        alert('エラー：予期せぬ不具合が発生しました。')
                    }
                    console.log(error.status)
                    console.log(error)
                    $(this).removeClass("public")
                    $(this).addClass("private")
                    $(this).html('非公開')
                })
            }
        })
    })
</script>
</body>
</html>
