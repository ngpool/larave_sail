
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                投稿の一覧
            </h2>

            {{-- プルダウンメニュー --}}
            <div class="relative" x-data="{ isOpen: false }">
                <button
                    @click="isOpen = !isOpen"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
                    id="dropdownMenuButton"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    ソート ▼
                </button>
                <div
                    x-show="isOpen"
                    @click.away="isOpen = false"
                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                    role="menu"
                    aria-orientation="vertical"
                    aria-labelledby="dropdownMenuButton"
                    tabindex="-1"
                >
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">新しい順</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">古い順</a>
                </div>
            </div>

            <x-message :message="session('message')" />

        </div>
    </x-slot>

    {{-- 投稿一覧表示用のコード --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{$user->name}}さん、こんにちは！
        @foreach ($posts as $post)
            <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            {{-- 件名 --}}
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">
                                <a href="{{route('post.show',$post)}}">{{$post->title}}</a>
                            </h1>
                            <hr class="w-full">
                            {{-- 本文 --}}
                            <p class="mt-4 text-gray-600 py-4">{{$post->body}}</p>
                            <div class="text-sm font-semibold flex flex-row-reverse">
                                {{-- 投稿作成日 --}}
                                <p> {{$post->user->name}} • {{$post->created_at->format('Y年m月d日')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('public/js/dropdown.js') }}"></script>
