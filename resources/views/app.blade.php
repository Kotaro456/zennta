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
<body class="bg-white">
<header class="text-gray-600 body-font bg-white">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('top') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                 stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                 viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Zennta</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('top') }}" class="mr-5 hover:text-gray-900">TOP</a>
            <a href="{{ route('explore') }}" class="mr-5 hover:text-gray-900">Explore</a>
            <a href="{{ route('following') }}" class="mr-5 hover:text-gray-900">Following</a>
            <a href="{{ route('dashboard') }}" class="mr-5 hover:text-gray-900">Dashboard</a>
            <a href="{{ route('article.new') }}" class="mx-3 px-3 py-2 rounded-lg bg-purple-500 text-white">Add</a>
        </nav>

        {{-- @todo コンポーネント化するか、他に合わせるか決めて実装する --}}
        <div class="hidden sm:flex items-center sm:ml-6">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('user.profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endauth
            {{-- @todo ゲストユーザーの時のSignupボタンを設置 --}}
        </div>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    </div>
</header>
<div class="content text-black body-font">
    @yield('content')
</div>
<footer class="text-gray-600 body-font">
    <div
        class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a href="#" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2"
                     class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
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
</footer>
</body>
</html>
