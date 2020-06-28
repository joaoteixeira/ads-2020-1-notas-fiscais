@extends('layout.admin')

@section('title', 'Notas fiscais..::')

@section ('content-title','Notas fiscais')

@section('content')
        <a href="{{ route('lancamento.create') }}" class="btn btn-primary"> Nova nota fiscal</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nº Lançamento</th>
                    <th>Lote</th>
                    <th>Data</th>
                    <th>Nº Chamado</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach($lancamentos as $lancamento)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $lancamento -> id}}</td>
                    <td>{{ $lancamento -> lote_lancamento}}</td>
                    <td>{{ $lancamento -> data}}</td>
                    <td>{{ $lancamento -> n_chamado}}</td>
                    <td>
                        
                    </td>        
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection        