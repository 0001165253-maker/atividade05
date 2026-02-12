@extends('layouts.app')

@section('conteudo')
<h1>Aluguéis</h1>
<a href="{{ route('alugueis.create') }}" class="btn btn-primary mb-3">Novo Aluguel</a>

<table class="table">
<tr>
    <th>Cliente</th>
    <th>Carro</th>
    <th>Status</th>
</tr>
@foreach($alugueis as $a)
<tr>
    <td>{{ $a->usuario_id }}</td>
    <td>{{ $a->carro_id }}</td>
    <td>{{ $a->status }}</td>
</tr>
@endforeach
</table>
@endsection
