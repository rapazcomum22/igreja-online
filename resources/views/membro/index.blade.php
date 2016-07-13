{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 08/07/16--}}
{{--Time: 08:58--}}
@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Painel de Controle - Membro</h1>
        </div>
    </div>
    <div class="col-md-12">
        <h4>
            <a href="{{route('membro-create')}}" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Membro</a>
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1>Lista de Membros Registrados</h1>
        </div>
        <div class="form-group col-md-12">
            @foreach($model as $m)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <p class="col-md-10">
                                Nome: <span>{{$m->nome}}</span> <br>
                                Nascimento: <span>{{$m->nascimento}}</span> <br>
                                Profissão: <span>{{$m->profissao}}</span> <br>
                                Igreja: <span>{{$m->MembroIgreja->razao_social}}</span> <br>
                            </p>
                            <div class="col-md-2 col-xs-6">
                                <a href="{{route('membro-edit', ['id' => $m->id])}}"class="btn btn-sm btn-block btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection