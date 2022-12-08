@extends('app')
@section('content')
    <div class="flex">
        <aside
            class="flex w-80 min-width-sidebar h-full min-h-screen flex-col space-y-4 border-r-2 border-gray-100 bg-white pt-8 px-8">
            <a href="#" class="text-right rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600 bg-purple-500 text-white">
                記事一覧
            </a>

            <a href="#" class="text-right rounded-md pl-auto px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                フォローしたアカウント
            </a>

            <a href="#" class="text-right rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                いいねした記事
            </a>
        </aside>

        <div class="w-full p-4">
            <div class="text-black body-font pt-4 pb-16">
                <div class="container px-5 py-4 mx-auto my-4">
                    <div class="flex flex-wrap place-content-around -m-4">
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-5 pb-4 mx-auto my-4">
                    <div class="flex flex-wrap place-content-around -m-4">
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-whit border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-5 pb-4 mx-auto my-4">
                    <div class="flex flex-wrap place-content-around -m-4">
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">タイトル</h1>
                                <p class="leading-relaxed mb-3">著者アカウント</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection