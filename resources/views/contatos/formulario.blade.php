@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Informações do Contato
                	<a class="float-right" href="{{url('contatos')}}">Listagem de Contatos</a>
                </div>
                <div class="panel-body">
                    {{ Form::open() }}
                        
                        {!! Form::input('text', 'nome', '',['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}

                        {!! Form::input('text', 'nome', '',['class' => 'form-control', 'autofocus', 'placeholder' => 'E-mail']) !!}

                        {!! Form::input('text', 'nome', '',['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}

                        {!! Form::input('text', 'nome', '',['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
