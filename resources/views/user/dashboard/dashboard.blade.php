@extends('app')
@section('content')
    <div class="flex">
        @include('user.components.sidebar')
        <div class="w-full p-4">
            <div class="text-black body-font pt-4 pb-16">
                <div class="container px-5 py-4 mx-auto my-4">
                    <div class="flex flex-wrap place-content-around -m-4">
                        @foreach($articles as $article)
                        <div class="p-2 lg:w-1/4">
                            <div
                                class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">カテゴリー</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $article->title }}</h1>
                                <p class="leading-relaxed mb-3">{{ $article->body }}</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">いいね</a>
                                <div class="text-center mt-1 w-full inline-flex justify-around">
                                    <a href="{{ route('article.edit', $article->id) }}" class="shadow-lg bg-violet-500 shadow-violet-500/50 text-white rounded px-2 py-1">
                                        edit
                                    </a>
                                    <form action="{{route('article.delete', $article->id)}}" method="POST">
                                        @csrf
                                        <input type="submit" value="delete" class="cursor-pointer shadow-lg bg-red-500 shadow-red-500/50 text-white rounded px-2 py-1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
