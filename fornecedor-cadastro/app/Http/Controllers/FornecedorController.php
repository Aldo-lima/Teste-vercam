<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   $fornecedores = Fornecedor::with(['contatoPrincipal','contatosAdicional', 'endereco'])->get();
//return view('lista_fornecedor', compact('fornecedores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPessoaFisica()
    {
        $action = route('fornecedores.store');
        return view('form_fornecedor_fisica',compact('action'));
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


    public function store(Request $request)
    {/*
        DB::beginTransaction();
       $fornecedor =  Fornecedor::create($request->all());
       $fornecedor->endereco()->create($request->all());
       $fornecedor->contatoPrincipal()->create($request->all());
       $fornecedor->contatosAdicional()->create($request->all());
       DB::Commit();
       return redirect()->route('fornecedor.index');
*/
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
