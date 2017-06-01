@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informacoes das notas
                    <a class="pull-right" href="{{ url('notas') }}">Listagem das notas</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif 

                    @if(Request::is('*/editar'))
                    {!! Form::model($nota, ['method' => 'PATCH', 'url' => 'notas/'.$nota->id]) !!}

                    @else
                    {!! Form::open(['url' => 'notas/salvar']) !!}
                    @endif
                    

                    {!!Form::hidden('id_usuario', Auth::user()->id)!!}

                    
                    {!! Form::label('materia', 'Digite sua disciplina') !!}

                    {!! Form::input('text', 'materia', null,['class' => 'form-control', 'placeholder' => 'Digite a Disciplina', 'required'])!!}

                    {!! Form::label('d1_p1', 'Nota da P1') !!}
                    {!! Form::input('number', 'd1_p1', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Primeira Prova', 'required'])!!}

                    {!! Form::label('atv_d1', 'Nota da Atividade') !!}
                    {!! Form::input('number', 'atv_d1', null, ['class' => 'form-control', 'placeholder' => 'Nota da Atividade', 'required'])!!}

                    {!! Form::label('d1_p2', 'Nota da P2') !!}
                    {!! Form::input('number', 'd1_p2', null, ['class' => 'form-control', 'placeholder' => 'Segunda Prova', 'required'])!!}

                    {!! Form::label('d1_p3', 'Nota da P3') !!}
                    {!! Form::input('number', 'd1_p3', '0', ['class' => 'form-control', 'placeholder' => 'Terceita Prova'])!!}<br>

                    {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection