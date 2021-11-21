@extends('template')

@section('main')
<h2>Insira o ticket</h2>
<p>Insira o arquivo</p>

<form action="{{ route('post_insert') }}" method="POST">

    <div>
        <label for="título">ID Ticket</label>
        <input type="text" name="titulo">
    </div>

    <div>
        <label for="titulo">Conteúdo</label>
        <textarea name="conteudo" id="conteudo" cols="60" rows="20"></textarea>
    </div>
    <button>Cadastrar Post</button>
    @csrf
</form>

@endsection

@section('titulo')
Criando PostS
@endsection


