{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 08/07/16--}}
{{--Time: 11:21--}}
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>Painel de Controle - Adicionar Membro</h1>
        </div>
    </div>
    <form action="{{route('padre-adiciona')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row form-group">
            <div class="col-md-4">
                <label>Igreja:</label>
                <select name="igreja" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($igreja as $i)
                        <option value="{{$i->id}}">{{$i->razao_social}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label>Data que Ingressou na Igreja:</label>
                <input type="text" name="data" placeholder="Ex: {{date('d/m/Y',strtotime('now'))}}" id="data" class="form-control" required>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-2">
                    <a href="{{route('padre-index')}}"class="btn btn-default">Cancelar</a>
                </div>
                <div class="col-md-10 text-right">
                    <button class="btn btn-success">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            $("#data").mask("99/99/9999");
        });
    </script>
@endsection