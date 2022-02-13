@extends('layouts.main')

@section('title','clientes')

@section('content')
        <div class="col s12 l8 push-l2">
            <p class="center">Tabela de Clientes</p>
            <table class="responsive-table centered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Cep</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $ds)
                    <tr>
                        <td>{{$ds->id}}</td>
                        <td>{{$ds->nome}}</td>
                        <td>{{$ds->telefone}}</td>
                        <td>{{$ds->email}}</td>
                        <td>{{$ds->cep}}</td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
@endsection