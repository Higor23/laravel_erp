<?php

namespace App\Http\Controllers;

use App\Account;
use App\Renevue;
use Illuminate\Http\Request;

class RenevueController extends Controller
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

    public function create()
    {
        $contas = Account::all();

        return view('renevue.create', ['contas' => $contas]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'vencimento' => 'required',
            'conta_id' => 'required',
            'descricao' => 'required',
            'valor' => 'required',
            'categoria' => 'required',
        ]);

        Renevue::create($request->all());

        return redirect()->route('renevue.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Renevue  $renevue
     * @return \Illuminate\Http\Response
     */
    public function show(Renevue $renevue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Renevue  $renevue
     * @return \Illuminate\Http\Response
     */
    public function edit(Renevue $renevue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Renevue  $renevue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renevue $renevue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Renevue  $renevue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renevue $renevue)
    {
        //
    }
}
