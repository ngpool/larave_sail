<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ内容確認
        </h2>
        <x-validation-errors class="mb-4" :errors="$errors"/>
        <x-message :message="session('message')"/>
    </x-slot>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">

                <div class="card-body">
                    <form method="POST" action="{{ route('send') }}">
                        @csrf
                        <input type="hidden" name="email" value="{{ $contact['email']}}">
                        <input type="hidden" name="contact" value="{{ $contact['contact']}}">
                        <div class="form-group row w-full flex flex-col">
                            <label for="email" class="font-semibold col-md-3 col-form-label text-md-right">メールアドレス<label>
                            <div class="col-md-9">
                                {{ $contact['email']}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="font-semibold col-md-3 col-form-label text-md-right">お問い合わせ内容<label>
                            <div class="col-md-9">
                                {{ $contact['contact']}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-9 offset-md-3">
                                <x-primary-button class="mt-4">
                                    送信
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>

