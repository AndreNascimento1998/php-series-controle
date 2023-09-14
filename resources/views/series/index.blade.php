<x-layout title="Séries">
    <div class="button">
        <a href="/series/criar" class="buttonAdd">Adicionar</a>
    </div>
    <div class="container">
        <div class="list">
            @foreach ($series as $serie)
                <li class="semEstilo"> {{ $serie->nome }} </li>
            @endforeach
        </div>
    </div>
</x-layout>

<style>
    a {
        text-decoration: none;
    }

    .buttonAdd {
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

    .container{
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .list {
        width: 30%;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .semEstilo {
        list-style-type: none;
        border: 2px solid #1246cd;
        padding: 5px 0;
        margin: 0;
    }

    .semEstilo:hover {
        cursor: pointer;
        background-color: #b1b5d9;
    }
</style>
