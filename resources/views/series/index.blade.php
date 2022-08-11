<x-layout>
    <x-slot:title>
        Series - Listar Itens
        </x-slot>
        <x-slot:header>
            Listar Séries
            </x-slot>

            <a href="{{ route('createSeries') }}" class="btn btn-primary btn-sm mb-4" tabindex="-1" role="button"
                aria-disabled="true">Adicionar</a>
            <ul class="list-group">
                @foreach ($series as $serie)
                    <li class="list-group-item">{{ $serie }}</li>
                @endforeach
            </ul>
</x-layout>
