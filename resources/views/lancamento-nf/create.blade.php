@extends('layout.admin')

@section ('content-title','Nova Nota Fiscal')

@section('content')
       
        <form action="{{ route('lancamento.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="">Data</label>
               <input class="form-control" type="text" value="{{ date('d/M/Y')}}" disabled>

            </div>
           
           
            <div class="form-group">
                <label for="">Beneficiário</label>
                <select name="beneficiario" class="form-control">
                    <option>Selecione o beneficiário</option>

                    @foreach($beneficiarios as $beneficiario)
                        <option value="{{ $beneficiario->id }}">{{ $beneficiario->nome_beneficiario}}</option>
                    @endforeach
                </select>
            </div>    

            <div class="form-group">
                <label for="">Fornecedor</label>
                <select name="fornecedor" class="form-control">
                    <option>Selecione o fornecedor</option>

                </select>  

            </div>

                    
            <div class="form-group">
                <label for="">Lote</label>
                <input name="lote" class="form-control" placeholder="Digite o número do lote">
                    

            </div>

            <div class="form-group">
                <label for="">Número do chamado</label>
                <input name="lote" class="form-control" placeholder="Digite o número do chamado">
                    

            </div>



             <button type="submit" class="btn btn-primary">Salvar</button>
         </form> 
         
@endsection 