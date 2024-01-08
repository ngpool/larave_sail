<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ内容確認
        </h2>
        <x-validation-errors class="mb-4" :errors="$errors"/>
        <x-message :message="session('message')"/>
    </x-slot>
    <div class="container">
    <div class="card">
        <div class="card-body">
            送信しました。
        </div>
    </div>
    </div>
</x-app-layout>
