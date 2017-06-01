@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Notas
                    <a class="pull-right" href="{{ url('notas/novo') }}">Nova Nota</a>
                </div>

                <div class="panel-body">
                    <table border="1" style="width: 100%;" class="tabela-notas">
                        <th>ID do Usuario</th>
                        <th>Disciplina</th>
                        <th>Nota da Prova 1</th>
                        <th>Nota da Prova 2</th>
                        <th>Nota da Atividade</th>
                        <th>Nota da Prova 3</th>
                        <tbody>
                            @foreach($notas as $nota)
                            <tr>
                                <td>{{ $nota->id_usuario }}</td>
                                <td>{{ $nota->materia }}</td>
                                <td>{{ $nota->d1_p1 }}</td>
                                <td>{{ $nota->d1_p2 }}</td>
                                <td>{{ $nota->atv_d1 }}</td>
                                <td>{{ $nota->d1_p3 }} </td>
                                <td>
                                    <a href="notas/{{$nota->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                    {{-- {!! Form::open(['method' => 'DELETE', 'url' => 'notas/'.$nota->id])!!} --}}
                                    <form method="POST" action="http://homestead.app/notas/6" accept-charset="UTF-8" style="display: inline-block;"><input name="_method" value="DELETE" type="hidden"><input name="_token" value="yyBx5QOx2abaj0PUS5qPhzfey2UhYfBW2wK9vfH3" type="hidden"> <button type="submit" class="btn btn-default btn-sm">Excluir</button></form>
                                    {{-- <button  type="submit" class="btn btn-default btn-sm">Excluir</button> --}}
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
