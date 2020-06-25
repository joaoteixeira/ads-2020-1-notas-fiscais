@extends('layout.admin')

@section('content-title','Atualização de clientes')

@section('content')
       
        <form action="/beneficiario/{{ $beneficiarios->id}}" method="post">
            @csrf
            @method('PUT')
           
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" class="form-control" id="" name="nome_beneficiario" value="{{ $beneficiarios->nome_beneficiario}}" >
            </div>

            <div class="form-group">
                <label for="">Carteirinha</label>
                <input type="text" class="form-control" id="" name="cart_beneficiario" value="{{ $beneficiarios->cart_beneficiario}}">
            </div> 

             <button type="submit" class="btn btn-primary">Salvar</button>
             <a href="/beneficiario" class="btn btn-danger">Cancelar</button>
         </form> 
         
@endsection 