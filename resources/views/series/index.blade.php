<x-layout>
    <x-slot:title>
        Series - Listar Itens
        </x-slot>
        <x-slot:header>
            Listar Itens
            </x-slot>


            <a href="{{ route('createSeries') }}">Adicionar</a>
            <ul>
                @foreach ($series as $serie)
                    <li>{{ $serie }}</li>
                @endforeach
            </ul>
</x-layout>
