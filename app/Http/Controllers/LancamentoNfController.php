<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beneficiario;
use App\Fornecedor;
use App\Lancamento;

class LancamentoNfController extends Controller
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
        $lancamentos = Lancamento::all();
        return view('lancamento-nf.index', array('lancamentos'=> $lancamentos));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $beneficiarios = Beneficiario::all();
        return view('lancamento-nf.create', ['beneficiarios' => $beneficiarios]);

        $fornecedores = Fornecedor::all();
        return view('lancamento-nf.create', ['fornecedores' => $fornecedores]);

              
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {   $fornecedores = Fornecedor::find($request->fornecedor);
        $beneficiario = Beneficiario::find($request->beneficiario);

        if(!$beneficiario)

            return 'Erro ao selecionar um beneficiario';

        $data = new \Datetime();    

        $os = new Lancamento;
        $os->beneficiario()->associate($beneficiario); 
        $os->data = $data->format('Y-m-d');
        $os->save();   

        return $os;


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
