@extends('layout.admin')

@section ('content-title','Novo beneficiário')

@section('content')
       
        <form action="" method="post">
         
        <div class="form-group">
            <label for="">Carteirinha</label>
            <input type="text" class="form-control" id="">
        </div>  
            <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="">
          </div>

         <button type="submit" class="btn btn-primary">Salvar</button>
         </form> 
         
@endsection 