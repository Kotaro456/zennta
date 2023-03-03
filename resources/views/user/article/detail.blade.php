@extends('app')
@section('content')
    <div class="w-4/5 mx-auto grid grid-rows-4 grid-cols-4 grid-flow-col gap-4 bg-gray-100 p-12">
        <div class="row-span-4 col-span-3 bg-white p-8">
            <h1>{{ $article->title }}</h1>
            <div class="border-2 border-white border-solid bg-white rounded">
                {{ $article->body }}
            </div>
        </div>
        <div class="row-span-1 border-2 border-solid border-white bg-white rounded text-center p-4">
            <p>著者：{{ $article->user->name }}</p>
            <p>フォローボタン</p>
            <p>書いた記事数</p>
            <p>著者ページへ行くリンクを書く</p>
        </div>
    </div>
@endsection
