{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 08/07/16--}}
{{--Time: 11:20--}}
@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>Painel de Controle - Padre</h1>
        </div>
    </div>
    <div class="col-md-12">
        <h4>
            <a href="{{route('padre-create')}}" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Membro</a>
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1>Lista de Padres Registrados</h1>
        </div>
        <div class="form-group col-md-12">
            @foreach($model as $m)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <p class="col-md-10">
                                Nome: Padre <span>{{$m->nome}}</span> <br>
                                Igreja: <span>{{$m->PadreIgreja->razao_social}}</span> <br>
                                Na Igreja desde : <span>{{$m->data}}</span>
                            </p>
                            <div class="col-md-2 col-xs-6">
                                <a href="{{route('padre-edit', ['id' => $m->id])}}"class="btn btn-sm btn-block btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection