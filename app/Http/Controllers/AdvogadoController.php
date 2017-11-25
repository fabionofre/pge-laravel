<?php

namespace App\Http\Controllers;

use App\advogado;
use Illuminate\Http\Request;

class AdvogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advogados = advogado::all();

        return response()->json($advogados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advogado = new advogado;

        $advogado->nome = $request->nome;
        $advogado->oab = $request->oab;
        $advogado->cep = $request->cep;
        $advogado->cidade = $request->cidade;
        $advogado->uf = $request->uf;
        $advogado->rua = $request->rua;
        $advogado->rg = $request->rg;
        $advogado->cpf = $request->cpf;

        $advogado->save();
        return response()->json($advogado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function show(advogado $advogado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function edit(advogado $advogado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advogado $advogado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function destroy(advogado $advogado)
    {
        //
    }
}
