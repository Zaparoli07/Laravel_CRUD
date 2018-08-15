@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-">
            <div class="card">
                <div class="card-header">
                	Dashboard
                	<a class="float-right" href="{{url('contatos/novo')}}">Novo Contato</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Facebook</th>
                        <th>LinkedIn</th>
                        <th>Celular</th>
                        <th>Telefone Comercial</th>
                        <th>Telefone Residencial</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($contatos as $contato)
                            <tr>
                                <td>{{ $contato->nome }}</td>
                                <td>{{ $contato->email }}</td>
                                <td>{{ $contato->facebook }}</td>
                                <td>{{ $contato->linkedin }}</td>
                                <td>{{ $contato->telefone_celular }}</td>
                                <td>{{ $contato->telefone_comercial }}</td>
                                <td>{{ $contato->telefone_residencial }}</td>
                                <td>
                                    <a href="contatos/{{ $contato->id }}/editar" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="contatos/{{ $contato->id }}/editar" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
