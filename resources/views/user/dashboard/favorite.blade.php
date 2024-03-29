@extends('app')
@section('content')
    <div class="flex">
        @include('user.components.sidebar')

        <div class="w-full p-4">
            <div class="text-black body-font pt-4 pb-16">
                <div class="container px-5 py-4 mx-auto my-4">
                    <div class="flex flex-wrap place-content-around -m-4">
                        @foreach($articles as $article)
                            <a class="block p-2 lg:w-1/2" href="{{route('article.detail', ['id' => $article->id])}}">
                                <div
                                    class="bg-white border-2 border-indigo-400 px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $article->category ? $article->category->name : "カテゴリーなし" }}</h2>
                                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $article->title }}</h1>
                                    <p class="leading-relaxed mb-3">{{ Str::limit($article->body, 100, '...') }}</p>
                                    <span class="article-like-btn cursor-pointer inline-flex items-center
                                           {{ $article->like_users()->where('user_id', Auth::id())->first() ? 'liked' : '' }}"
                                          style="{{ $article->like_users()->where('user_id', Auth::id())->first() ? 'color: #ff367f' : 'color: #9ca3af' }}"
                                          data-article-id="{{ $article->id }}">
                                        <i class="fa-solid fa-heart"></i>
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
