{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 08/07/16--}}
{{--Time: 12:53--}}
@extends('layouts.app')
@section('head')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>Painel de Controle - Missa</h1>
        </div>
    </div>
    <div class="col-md-12">
        <h4>
            <a href="{{route('missa-create')}}" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Membro</a>
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1>Lista de Missas Registrados</h1>
        </div>
        <div class="col-md-12 ps-page-header">
            <form action="#" method="get">
                <div class="row">
                    <div class="col-md-3">
                        <label>Data Inicial:</label>
                        <input type="text" class="form-control data-time" placeholder="01/01/{{date('Y')}}" name="data_inicial" required />
                    </div>
                    <div class="col-md-3">
                        <label>Data Final:</label>
                        <input type="text" class="form-control data-time" placeholder="{{date('d/m/Y')}}" name="data_final" required/>
                    </div>
                </div>
                <div class="row" style="padding-top: 15px">
                    <div class="col-md-12">
                        <button type="buscar" class="btn btn-primary btn-buscar" >
                            <span class="glyphicon glyphicon-search"></span> Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @if($_GET['data_inicial'] and $_GET['data_final'])
            <div class="col-md-12">
                <h5>
                   Consulta: {{$_GET['data_inicial']}} até {{$_GET['data_final']}}
                </h5>
            </div>
        @endif

        <div class="form-group col-md-12">
            @foreach($model as $m)
                @foreach($getPadre as $p)
                    @foreach($getIgreja as $i)
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <p class="col-md-10">
                                        Data da Missa: <span><strong>{{$m->data_missa}}</strong></span> <br>
                                        Horario da Missa: <span><strong>{{$m->horario}}</strong></span> <br>
                                        Nome do Padre: <span><strong>{{$p->nome}}</strong></span> <br>
                                        Igreja: <span><strong>{{$i->razao_social}}</strong></span> <br>
                                        Diacono: <span><strong>{{$m->diacono}}</strong></span> <br>
                                        Total de Dizimo: <span><strong>{{$m->total_dizimo}}</strong></span> <br>
                                        Total de Oferta: <span><strong>{{$m->total_oferta}}</strong></span> <br>
                                        Total Arrecadado: <span><strong>{{$m->total_arrecadacao}}</strong></span>
                                    </p>
                                    {{--<div class="col-md-2 col-xs-6">--}}
                                        {{--<a href="{{route('padre-edit', ['id' => $m->id])}}"class="btn btn-sm btn-block btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $('.data-time').datepicker({
                format: "dd/mm/yyyy",
                language: "pt-BR"
            });
        });
    </script>
@endsection