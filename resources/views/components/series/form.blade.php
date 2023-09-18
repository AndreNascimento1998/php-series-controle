 <form action="{{ $action }}" method="post">
    @csrf
     @if($update)
         @method('PUT')
     @endif
    <label for="nome">Nome</label>
    <input
        type="text"
        id="nome"
        name="nome"
        class="meu-input"
        @isset($nome)value="{{$nome}}"@endisset
    >
    <button type="submit" class="buttonAdd">Adicionar</button>
</form>

<style>
    .meu-input {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 16px;
        width: 30%;
        margin-bottom: 10px;
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

</style>
