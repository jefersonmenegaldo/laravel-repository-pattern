<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoPessoaRequest;
use App\Http\Requests\UpdateTipoPessoaRequest;
use App\Models\TipoPessoa;

class TipoPessoaController extends Controller
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
     * @param  \App\Http\Requests\StoreTipoPessoaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoPessoaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPessoa $tipoPessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPessoa $tipoPessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoPessoaRequest  $request
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoPessoaRequest $request, TipoPessoa $tipoPessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPessoa $tipoPessoa)
    {
        //
    }
}
