<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせフォーム
        </h2>
        <x-validation-errors class="mb-4" :errors="$errors"/>
            {{-- @if(session('message'))
            {{session('message')}}
        @endif --}}
        <x-message :message="session('message')"/>
    </x-slot>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card"> --}}
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mx-4 sm:p-8">
                    {{-- <div class="card-header">お問い合わせ</div> --}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('confirm') }}">
                            @csrf
                            <div class="form-group row w-full flex flex-col">
                            {{-- <div class="w-full flex flex-col"> --}}

                                <label for="email" class="font-semibold col-md-3 col-form-label text-md-right">メールアドレス<label>

                                <div class="col-md-9">
                                    <input id="email" type="text" class="form-control w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact" class="font-semibold col-md-3 col-form-label text-md-right">お問い合わせ内容<label>

                                <div class="col-md-9">
                                    <textarea id="contact" type="text" class="form-control w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md @error('contact') is-invalid @enderror" name="contact" value="contact" cols="30" rows="10"></textarea>

                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="w-full flex flex-col">
                                    <label for="image" class="font-semibold leading-none mt-4">画像（1MBまで） </label>
                                    <div>
                                    <input id="image" type="file" name="image">
                                    </div>
                                </div>
                                <div class="col-md-9 offset-md-3">
                                    {{-- <button type="submit" class="btn btn-primary">
                                        お問い合わせ内容の確認へ
                                    </button> --}}
                                    <x-primary-button class="mt-4">
                                        お問い合わせ内容の確認へ
                                    </x-primary-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {{-- </div>
    </div> --}}

</x-app-layout>

