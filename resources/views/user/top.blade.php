@extends('app')
@section('content')
    @foreach($articlesPerCategories as $key => $articlesPerCategory)
        <section class="text-black body-font py-16 bg-indigo-100">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $key }}</h1>
            </div>
            <div class="container px-5 py-4 mx-auto my-4">
                <div class="flex flex-wrap -m-4">
                @foreach($articlesPerCategory as $article)
                        <div class="p-2 lg:w-1/3">
                            <div
                                class="bg-white px-8 py-2 rounded-lg overflow-hidden text-center relative">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $article->category->name ?? 'null' }}</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $article->title }}</h1>
                                <p class="leading-relaxed mb-3">{{ $article->user->name }}</p>
                                <span class="article-like-btn cursor-pointer inline-flex items-center" style="{{ $article->like_users()->where('user_id', Auth::id())->first() ? 'color: #ff367f' : 'color: #9ca3af' }}" data-article-id="{{ $article->id }}"><i class="fa-solid fa-heart"></i></span>
                            </div>
                        </div>

                @endforeach
                </div>
            </div>
        </section>
    @endforeach
@endsection
