<x-layout title="Nova Série">
    <form action="{{route('series.store')}}" method="post" class="form">
        @csrf

        <label for="nome">Nome</label>
        <input
            type="text"
            id="nome"
            name="nome"
            class="meu-input"
            value="{{ old('nome')}}"
        >

        <label for="seasonsQty">N° Temporadas: </label>
        <input
            type="text"
            id="seasonsQty"
            name="seasonsQty"
            class="meu-input"
            value="{{ old('seasonsQty')}}"
        >

        <label for="episodesPerSeasons">Eps / Temporadas</label>
        <input
            type="text"
            id="episodesPerSeasons"
            name="episodesPerSeasons"
            class="meu-input"
            value="{{ old('episodesPerSeasons')}}"
        >

        <button type="submit" class="buttonAdd">Adicionar</button>
    </form>
</x-layout>
<style>
    .form {
        display: flex;
        flex-direction: column;
    }

    .meu-input {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 16px;
        width: 30%;
        margin-bottom: 10px;
    }

    .buttonAdd {
        max-width: 150px;
        background-color: #fff;
        color: #1246cd;
        border: 2px solid #1246cd;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .buttonAdd:hover {
        background-color: #1246cd;
        color: #ffffff;
        border: none;
        padding: 12px 22px;
    }

</style>
