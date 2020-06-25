@extends('layout.admin')

@section ('content-title','Novo fornecedor')

@section('content')
       
        <form action="{{ route('fornecedor.store') }}" method="post">
            @csrf
           
           
            <div class="form-group">
                <label for="">Razão social</label>
                <input type="text" class="form-control" id="" name="fornecedor">
            </div>

            <div class="form-group">
                <label for="">Cnpj</label>
                <input type="text" class="form-control" id="" name="cnpj">
            </div> 

             <button type="submit" class="btn btn-primary">Salvar</button>
         </form> 
         
@endsection 