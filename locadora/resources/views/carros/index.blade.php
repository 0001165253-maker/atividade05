<!DOCTYPE html>
@extends('layouts.app')

@section('conteudo')
    <h1 class="mb-4">Carros Disponíveis</h1>
    <a href="{{ route('carros.create') }}" class="btn btn-primary mb-3">
    Novo Carro
    </a>

    <div class="row">
        @foreach($carros as $carro)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $carro->modelo }}</h5>
                        <p class="card-text">
                            Marca: {{ $carro->marca }} <br>
                            Ano: {{ $carro->ano }} <br>
                            Placa: {{ $carro->placa }} <br>
                            Diária: R$ {{ $carro->preco_diaria }}
                        </p>
                        <span class="badge bg-success">{{ $carro->status }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

