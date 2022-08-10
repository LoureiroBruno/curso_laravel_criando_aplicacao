<x-layout>
    <x-slot:title>
        Series
    </x-slot>

    @foreach ($series as $serie)
        <li>{{ $serie }}</li>
    @endforeach
</x-layout>
