@extends('layouts.app')

@section('conteudo')
<h1>Clientes</h1>
<a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Novo Cliente</a>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->status }}</td>
    </tr>
    @endforeach
</table>
@endsection
