<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alugueis = Aluguel::all();
        return view('alugueis.index', compact('alugueis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::where('status','ativo')->get();
        $carros = Carro::where('status','disponivel')->get();

        return view('alugueis.create', compact('clientes','carros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Aluguel::create($request->all());

        // muda status do carro
        $carro = Carro::find($request->carro_id);
        $carro->status = 'alugado';
        $carro->save();

        return redirect()->route('alugueis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
