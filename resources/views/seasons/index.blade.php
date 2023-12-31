<x-layout title="Séries">
    <div class="container">
        <div class="list">
            {{$seasons}}
            @foreach ($seasons as $season)
                <div class="listButton">
                    <span class="semEstilo" style="width: 80%">
                        Temporada = {{ $season->number }}
                    </span>
                    <section style="display: flex">
                        {{$season->episodes->count()}}
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
