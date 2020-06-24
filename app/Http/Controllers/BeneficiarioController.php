<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beneficiario;

class BeneficiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $beneficiarios = Beneficiario::all();
        return view('cliente.index', array('beneficiarios'=> $beneficiarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //$beneficiario = new Beneficiario();
       //$beneficiario->id_beneficiario = $request->id_beneficiario;
       //$beneficiario->nome_beneficiario = $request->nome_beneficiario;
       //$beneficiario->save();

       $beneficiario = Beneficiario::create($request->all());

       return redirect('beneficiario')->with('status', 'Novo beneficiario cadastrado com sucesso');
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
        $beneficiarios = Beneficiario::find($id);
       return view('cliente.edit', array('beneficiarios'=> $beneficiarios));

      // return view('cliente.edit');
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
        $beneficiarios = Beneficiario::find($id);
        $beneficiarios->update($request->all());

        return redirect('beneficiario')->with('statusUpdate', 'Beneficiário atualizado com sucesso!');
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
