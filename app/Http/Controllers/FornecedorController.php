<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fornecedor;

class FornecedorController extends Controller
{ 
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $fornecedores = Fornecedor::all();
        return view('fornecedor.index', array('fornecedores'=> $fornecedores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $fornecedor = Fornecedor::create($request->all());

       return redirect('fornecedor')->with('status', 'Novo fornecedor cadastrado com sucesso');
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
        $fornecedores = Fornecedor::find($id);
       return view('fornecedor.edit', array('fornecedores'=> $fornecedores));

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
        $fornecedores = Fornecedor::find($id);
        $fornecedores ->update($request->all());

        return redirect('fornecedor')->with('statusUpdate', 'Beneficiário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedores = Fornecedor::find($id);
        $fornecedores->delete();

        return redirect('fornecedor')->with('statusUpdate', 'Fornecedor deletado com sucesso!');
    }

    public function destroyConfirm($id)

    {
        $fornecedores = Fornecedor::find($id);

        return view('fornecedor.destroy', ['fornecedores' => $fornecedores]);
    }
}
