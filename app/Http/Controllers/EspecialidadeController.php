<?php

namespace App\Http\Controllers;

use App\especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = especialidade::all();

        return response()->json($especialidades);
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
        $especialidade = new especialidade;
        $especialidade->nome = $request->nome;

        $especialidade->save();
        return response()->json($especialidade);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function show(especialidade $especialidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function edit(especialidade $especialidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, especialidade $especialidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(especialidade $especialidade)
    {
        //
    }
}
