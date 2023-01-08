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

        <div class="w-72 flex justify-between">
            <button
                class="inline-flex items-center bg-violet-600 border-0 py-2 px-3 focus:outline-none hover:bg-violet-400 rounded text-base text-white font-semibold mt-4 md:mt-0">
                公開/非公開
            </button>
            <button
                id="updateArticle"
                class="inline-flex items-center bg-violet-600 border-0 py-2 px-3 focus:outline-none hover:bg-violet-400 rounded text-base text-white font-semibold mt-4 md:mt-0">
                下書き保存/更新
            </button>
        </div>
    </div>
</header>
<div class="content text-black body-font">
    <div class=" w-4/5 mx-auto pt-12">
        <form id="articleForm" class=" w-4/5 mx-auto pt-12">
            @csrf
            <input id="articleId" type="hidden" value="{{ $article->id }}" />
            <input id="articleTitle" type="text" name="title" placeholder="Title" value="{{ $article->title }}" class="border-none outline-none w-full text-2xl" />
            <textarea id="articleBody" class="h-192 w-full mt-12 p-8 text-xl border rounded-xl overflow-hidden resize-none focus:border-blue-500 ring-1 ring-transparent focus:ring-blue-500 focus:outline-none text-black transition ease-in-out duration-300">{{ $article->body }}</textarea>
        </form>
    </div>
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

            const data = {
                id   : articleId,
                title: $('#articleForm #articleTitle').val(),
                body : $('#articleForm #articleBody').val(),
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
    })
</script>
</body>
</html>
