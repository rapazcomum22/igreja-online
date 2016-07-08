{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 08/07/16--}}
{{--Time: 13:04--}}
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>Painel de Controle - Adicionar Missa</h1>
        </div>
    </div>
    <form action="{{route('membro-adiciona')}}"method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row form-group">
            <div class="col-md-4">
                <label>Padre:</label>
                <select name="padre" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($padre as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                    @endforeach
                </select>
            </div>
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
                <label>Diácono:</label>
                <input type="text" name="diacono" class="form-control" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <label>Data da Missa:</label>
                <input type="text" name="data_missa" id="data_missa" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label>Dia da Semana:</label>
                <select name="dia_semana" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($semana as $s)
                        <option value="{{$s->id}}">{{$s->descricao}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label>Hora da Missa:</label>
                <input type="text" name="horario" id="horario" class="form-control" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <label>Total do Dizimo:</label>
                <input type="text" name="total_dizimo" class="form-control mask-money" required>
            </div>
            <div class="col-md-4">
                <label>Total do Oferta:</label>
                <input type="text" name="total_oferta" class="form-control mask-money" required>
            </div>
            <div class="col-md-4">
                <label>Total Arrecadado:</label>
                <input type="text" name="total_arrecadacao"  class="form-control mask-money" required>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-2">
                    <a href="{{route('missa-index')}}"class="btn btn-default">Cancelar</a>
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
            $("#data_missa").mask("99/99/9999");
            $("#horario").mask("99:99");
            $(".mask-money").maskMoney({symbol:'R$ ',
                showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
        })
        });
    </script>
@endsection