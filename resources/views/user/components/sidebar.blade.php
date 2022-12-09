<aside
    class="flex w-80 min-width-sidebar h-full min-h-screen flex-col space-y-4 border-r-2 border-gray-100 bg-white pt-8 px-8">
    <a href="{{ route('dashboard') }}" class="text-right rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600 bg-purple-500 text-white">
        記事一覧
    </a>

    <a href="{{ route('dashboard.following') }}" class="text-right rounded-md pl-auto px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
        フォローしたアカウント
    </a>

    <a href="{{ route('dashboard.favorite') }}" class="text-right rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
        いいねした記事
    </a>
</aside>
