@extends('layout.admin')

@section('title', 'Fornecedores..::')

@section ('content-title','Fornecedores cadastrados')

@section('content')
        <a href="{{ route('fornecedor.create') }}" class="btn btn-primary"> Novo fornecedor</a>

        @if (session('status'))
            <div class="alert alert-sucess">
                {{session('status')}}
            </div>    
        @endif

        @if (session('statusUpdate'))
            <div class="alert alert-info">
                {{session('statusUpdate')}}
            </div>    
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Razao social</th>
                    <th>Cnpj</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>

                @foreach($fornecedores as $fornecedor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $fornecedor -> fornecedor}}</td>
                    <td>{{ $fornecedor -> cnpj}}</td>
                    <td>
                        <a href="{{ route('fornecedor.edit', $fornecedor->id )}}">Editar</a>

                        <a href="{{ route('fornecedor.destroy-confirm', $fornecedor->id)}}">Excluir</a>
                    </td>        
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection 
