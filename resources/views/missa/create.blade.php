{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 08/07/16--}}
{{--Time: 13:04--}}
@extends('layouts.app')
@section('head')
    <style>
        .box-error {
            border: 1px solid red;
        }

        .box-success {
            border: 1px solid green;
        }

        .error {
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>Painel de Controle - Adicionar Missa</h1>
        </div>
    </div>
    <form action="{{route('missa-adiciona')}}"method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row form-group">
            <div class="col-md-12">
                <label>Diácono:</label>
                <input type="text" name="diacono" class="form-control" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <label>Padre:</label>
                <select name="padre" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($padre as $p)
                        <option value="{{$p->id}}" name="{{$p->nome}}">{{$p->nome}}</option>
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
            <div class="col-md-2">
                <label>Data da Missa:</label>
                <input type="text" name="data_missa" id="exemplo" class="form-control datepicker" required>
            </div>
            <div class="col-md-2">
                <label>Hora da Missa:</label>
                <input type="text" name="horario" id="horario" class="form-control" required>
                <div class="hidden" id="hideHorario">Hora Inválida!</div>
            </div>
            <div class="col-md-2">
                <label>Total do Dizimo:</label>
                <input type="text" name="total_dizimo" id="total_dizimo" class="form-control money" required>
            </div>
            <div class="col-md-2">
                <label>Total do Oferta:</label>
                <input type="text" name="total_oferta" id="total_oferta" class="form-control money" required>
            </div>
            <div class="col-md-4">
                <label>Total Arrecadado:</label>
                <input type="hidden" name="total_arrecadacao_hide" id="total_arrecadacao_hide" class="form-control">
                <input type="text" name="total_arrecadacao" id="total_arrecadacao" disabled class="form-control">
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
            $('.money').mask('000.000,00',{reverse:true});
            $('#exemplo').datepicker({
                format: "dd/mm/yyyy",
                language: "pt-BR"
            });
        });

        $('#horario').blur(function () {
            var hora = $('#horario').val().replace(':', '.');
            if(parseFloat(hora) > 24.00){
                $('#horario').val('');
                $('#horario').addClass('box-error');
                $('#hideHorario').removeClass('hidden');
                $('#hideHorario').addClass('error');
            }
            else {
                $('#horario').removeClass('box-error');
                $('#hideHorario').addClass('hidden');
            }
        });
        $('#total_dizimo, #total_oferta').blur(function () {
            var totDizimo = $('#total_dizimo').val().replace('.', '').replace(',', '.');
            var totOferta = $('#total_oferta').val().replace('.', '').replace(',', '.');
            var total = parseFloat(totDizimo) + parseFloat(totOferta);
            $('#total_arrecadacao').val(number_format(total,'2',',','.'));
            $('#total_arrecadacao_hide').val(number_format(total,'2',',','.'));
        });


    </script>
@endsection