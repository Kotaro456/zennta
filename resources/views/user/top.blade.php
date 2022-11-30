<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-white">
<header class="text-gray-600 body-font bg-white">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                 stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                 viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Zennta</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="#" class="mr-5 hover:text-gray-900">TOP</a>
            <a href="#" class="mr-5 hover:text-gray-900">EXPLORE</a>
            <a href="#" class="mr-5 hover:text-gray-900">PHP</a>
            <a href="#" class="mr-5 hover:text-gray-900">Go</a>
        </nav>
        <button
            class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
            Button
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</header>
<section class="text-black body-font py-16 bg-indigo-100">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">トピックタイトル</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">トピックの説明文。</p>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-black body-font py-16 mt-1 bg-blue-100">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">トピックタイトル</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">トピックの説明文。</p>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-black body-font py-16 mt-1 bg-white">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">トピックタイトル</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">トピックの説明文。</p>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#"class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative border-solid border-2 border-indigo-400">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-black body-font py-16 mt-1 bg-sky-100">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">トピックタイトル</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">トピックの説明文。</p>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 py-4 mx-auto my-4">
        <div class="flex flex-wrap -m-4">
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3">
                <div
                    class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                    <p class="leading-relaxed mb-3">著者アカウント</p>
                    <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a href="#" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Zennta</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">エンジニアのための情報共有コミュニティ</p>
        </div>
        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
            <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">About</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">Zenntaについて</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">コミュニティガイドライン</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">使い方</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">よくある質問</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Legal</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">利用規約</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">プライバシーポリシー</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">特商法表記</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">運営会社</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Links</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">メディアキット</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">GitHub</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">RSS</a>
                    </li>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-gray-100">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
                <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a href="#" class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="#" class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a href="#" class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="#" class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
        </div>
    </div>
</footer>
</body>
</html>
