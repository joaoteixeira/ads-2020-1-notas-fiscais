@extends('layout.admin')

@section('content-title','Atualização de fornecedores')

@section('content')
       
        <form action="/fornecedor/{{ $fornecedores->id}}" method="post">
            @csrf
            @method('PUT')
           
            <div class="form-group">
                <label for="">Razão social</label>
                <input type="text" class="form-control" id="" name="fornecedor" value="{{ $fornecedores->fornecedor}}" >
            </div>

            <div class="form-group">
                <label for="">cnpj</label>
                <input type="text" class="form-control" id="" name="cnpj" value="{{ $fornecedores->cnpj}}">
            </div> 

             <button type="submit" class="btn btn-primary">Salvar</button>
             <a href="/fornecedor" class="btn btn-danger">Cancelar</button>
         </form> 
         
@endsection 