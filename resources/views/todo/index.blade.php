<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            TODOリスト
        </h2>
        <x-validation-errors class="mb-4" :errors="$errors"/>
            @if(session('message'))
            {{session('message')}}
        @endif
        <x-message :message="session('message')"/>
    </x-slot>
<body>

    @if ($todo_lists->isNotEmpty())
        <ul>
            @foreach ($todo_lists as $item)
                <li>
                    {{ $item->name }}
                </li>
            @endforeach
        </ul>
    @endif

</body>

</x-app-layout>
