<?php

namespace App\Http\Controllers;

use App\advogado_especialidade;
use Illuminate\Http\Request;

class AdvogadoEspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $advogado_esp = new advogado_especialidade;
        $advogado_esp->especialidade_id = $request->especialidade_id;
        $advogado_esp->advogado_id = $request->advogado_id;

        $advogado_esp->save();
        return response()->json($advogado_esp);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advogado_especialidade  $advogado_especialidade
     * @return \Illuminate\Http\Response
     */
    public function show(advogado_especialidade $advogado_especialidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advogado_especialidade  $advogado_especialidade
     * @return \Illuminate\Http\Response
     */
    public function edit(advogado_especialidade $advogado_especialidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advogado_especialidade  $advogado_especialidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advogado_especialidade $advogado_especialidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advogado_especialidade  $advogado_especialidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(advogado_especialidade $advogado_especialidade)
    {
        //
    }
}
