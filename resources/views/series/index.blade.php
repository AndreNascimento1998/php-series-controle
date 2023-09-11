<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>
    @foreach ($series as $serie)
        <li> {{ $serie }} </li>
    @endforeach
</x-layout>
