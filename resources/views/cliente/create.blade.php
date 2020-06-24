@extends('layout.admin')

@section ('content-title','Novo beneficiário')

@section('content')
       
        <form action="{{ route('beneficiario.store') }}" method="post">
            @csrf
           
           
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" class="form-control" id="" name="nome_beneficiario">
            </div>

            <div class="form-group">
                <label for="">Carteirinha</label>
                <input type="text" class="form-control" id="" name="cart_beneficiario">
            </div> 

             <button type="submit" class="btn btn-primary">Salvar</button>
         </form> 
         
@endsection 