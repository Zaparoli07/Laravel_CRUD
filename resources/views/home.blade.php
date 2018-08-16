@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <a class="float-right" href="{{ url('/contatos') }}">Contatos</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>Bem-Vindo(a)</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
