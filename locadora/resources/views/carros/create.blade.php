@extends('layouts.app')

@section('conteudo')
<h1>Novo Carro</h1>

<form action="{{ route('carros.store') }}" method="POST">
    @csrf

    <div class="mb-2">
        <input type="text" name="modelo" class="form-control" placeholder="Modelo">
    </div>

    <div class="mb-2">
        <input type="text" name="marca" class="form-control" placeholder="Marca">
    </div>

    <div class="mb-2">
        <input type="text" name="placa" class="form-control" placeholder="Placa">
    </div>

    <div class="mb-2">
        <input type="number" name="ano" class="form-control" placeholder="Ano">
    </div>

    <div class="mb-2">
        <input type="number" step="0.01" name="preco_diaria" class="form-control" placeholder="Preço da diária">
    </div>

    <input type="hidden" name="status" value="disponivel">

    <button class="btn btn-success">Salvar</button>
    <a href="/carros" class="btn btn-secondary">Voltar</a>
</form>
@endsection
