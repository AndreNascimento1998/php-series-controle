<x-layout title="Séries">
    <div class="button">
        <a href="{{route('series.create')}}" class="buttonAdd">Adicionar</a>

        @isset($messagemSucesso)
        <div>
            {{$messagemSucesso}}
        </div>
        @endisset
    </div>
    <div class="container">
        <div class="list">
            @foreach ($series as $serie)
                <div class="listButton">
                    <li class="semEstilo" style="width: 80%"> {{ $serie->nome }} </li>
                    <section style="display: flex">
                        <a class="buttonDelete" href="{{route('series.edit', $serie->id)}}">Edit</a>

                        <form action="{{route('series.destroy', $serie->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="buttonDelete">X</button>
                        </form>
                    </section>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

<style>
    a {
        text-decoration: none;
    }

    .listButton {
        display: flex;
    }

    .buttonDelete {
        margin-left: 2px;
        background-color: #fff;
        color: #e30c0c;
        border: 2px solid #e30c0c;
        padding: 10px 16px;
        border-radius: 50px;
        cursor: pointer;
        font-size: 16px;
    }

    .buttonDelete:hover {
        background-color: #e30c0c;
        color: #ffffff;
        border: none;
        padding: 12px 18px;
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
        gap: 8px;
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
