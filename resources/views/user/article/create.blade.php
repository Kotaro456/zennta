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
                id="saveAndUpdate"
                class="inline-flex items-center bg-violet-600 border-0 py-2 px-3 focus:outline-none hover:bg-violet-400 rounded text-base text-white font-semibold mt-4 md:mt-0">
                下書き保存/更新
            </button>
        </div>
    </div>
</header>
<div class="content text-black body-font">
    <form action="{{ route('article.create') }}" method="POST" id="articleForm" class=" w-4/5 mx-auto pt-12">
        <input id="articleTitle" type="text" name="title" placeholder="Title" class="border-none outline-none w-full text-2xl" />
        <textarea id="articleBody" class="h-192 w-full mt-12 p-8 text-xl border rounded-xl overflow-hidden resize-none focus:border-blue-500 ring-1 ring-transparent focus:ring-blue-500 focus:outline-none text-black transition ease-in-out duration-300"></textarea>
    </form>
</div>
<script type="module">
    $(document).ready(function() {
        $('#saveAndUpdate').on('click', function() {
            //ajaxでのcsrfトークン送信
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            const data = new FormData($("#articleForm").get(0))

            $.ajax({
                url: "/create",
                type: "POST",
                dataType: "json",
                data: data,
                processData: false,
            }).then((res) => {
                console.log(res)
            })
        })
    })
</script>
</body>
</html>
