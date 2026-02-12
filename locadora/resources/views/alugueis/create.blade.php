@extends('layouts.app')

@section('conteudo')
<h1>Novo Aluguel</h1>

<form method="POST" action="{{ route('alugueis.store') }}">
@csrf

<select name="usuario_id" class="form-control mb-2">
    <option>Selecione o cliente</option>
    @foreach($clientes as $c)
        <option value="{{ $c->id }}">{{ $c->nome }}</option>
    @endforeach
</select>

<select name="carro_id" class="form-control mb-2">
    <option>Selecione o carro</option>
    @foreach($carros as $carro)
        <option value="{{ $carro->id }}">{{ $carro->modelo }}</option>
    @endforeach
</select>

<input type="date" name="data_inicio" class="form-control mb-2">
<input type="date" name="data_final_prevista" class="form-control mb-2">

<input type="hidden" name="status" value="aberto">

<button class="btn btn-success">Alugar</button>
<a href="/alugueis" class="btn btn-secondary">Voltar</a>
</form>
@endsection
