@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset">
            <div class="card">
                <div class="card-header">
                	Informações do Contato
                	<a class="float-right" href="{{url('contatos')}}">Listagem de Contatos</a>
                </div>
            </div>
                <div class="form-control">

                    @if(Session::has('Sucesso'))
                        <div class="alert alert-success">{{ Session::get('Sucesso') }}</div>
                    @endif

                    @if(Request::is('*/editar'))
                        {!! Form::model($contato, ['method' => 'PATCH', 'url' => 'contatos/'.$contato->id]) !!}
                    @else
                        {!! Form::open(['url' => 'clientes/salvar']) !!}
                    @endif

                    {!! Form::open(['url' => 'contatos/salvar']) !!}
                        
                        {!! Form::label('nome', 'Nome', ['class' => 'font-weight-bold']) !!}

                        {!! Form::input('text', 'nome', null,['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}

                        {!! Form::label('email', 'E-mail', ['class' => 'font-weight-bold']) !!}

                        {!! Form::input('text', 'email', null,['class' => 'form-control', '', 'placeholder' => 'E-mail']) !!}

                        {!! Form::label('facebook', 'Facebook', ['class' => 'font-weight-bold']) !!}

                        {!! Form::input('text', 'facebook', null,['class' => 'form-control', '', 'placeholder' => 'Facebook']) !!}

                        {!! Form::label('linkedin', 'LinkedIn', ['class' => 'font-weight-bold']) !!}

                        {!! Form::input('text', 'linkedin', null,['class' => 'form-control', '', 'placeholder' => 'LinkedIn']) !!}

                        {!! Form::label('telefone_celular', 'Telefone Celular', ['class' => 'font-weight-bold']) !!}

                        {!! Form::input('text', 'telefone_celular', null,['class' => 'form-control', '', 'placeholder' => 'Telefone Celular']) !!}

                        {!! Form::label('telefone_comercial', 'Telefone Comercial', ['class' => 'font-weight-bold']) !!}

                        {!! Form::input('text', 'telefone_comercial', null,['class' => 'form-control', '', 'placeholder' => 'Telefone Comercial']) !!}

                        {!! Form::label('telefone_residencial', 'Telefone Residencial', ['class' => 'font-weight-bold']) !!}

                        {!! Form::input('text', 'telefone_residencial', null,['class' => 'form-control', '', 'placeholder' => 'Telefone Residencial']) !!}

                         
                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                       
                    {{ Form::close() }}
                </div>
        </div>
    </div>
</div>
@endsection
