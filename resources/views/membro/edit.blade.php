{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 08/07/16--}}
{{--Time: 10:16--}}
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>Painel de Controle - Adicionar Membro</h1>
        </div>
    </div>
    <form action="{{route('membro-update', ['id'=>$model->id])}}"method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row form-group">
            <div class="col-md-4">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{$model->nome}}">
            </div>
            <div class="col-md-2">
                <label>Data de Nascimento:</label>
                <input type="text" name="nascimento" placeholder="Ex: {{date('d/m/Y',strtotime('now'))}}" id="nascimento" value="{{$model->nascimento}}" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>Sexo:</label>
                <select name="sexo" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($sexo as $s)
                        <option value="{{$s->id}}" {{$model->id_sexo == $s->id  ? 'selected' : ''}}>{{$s->descricao}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label>Estado Civil:</label>
                <select name="estado_civil" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($estado as $e)
                        <option value="{{$e->id}}" {{$model->id_estado_civil == $e->id  ? 'selected' : ''}}>{{$e->descricao}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-3">
                <label>Endereço:</label>
                <input type="text" name="endereco" class="form-control" value="{{$model->endereco}}" required>
            </div>
            <div class="col-md-2">
                <label>Bairro:</label>
                <input type="text" name="bairro" class="form-control" value="{{$model->bairro}}" required>
            </div>
            <div class="col-md-2">
                <label>Numero:</label>
                <input type="text" name="numero"  id="numero" class="form-control" value="{{$model->numero}}" required>
            </div>
            <div class="col-md-2">
                <label>CEP:</label>
                <input type="text" name="cep"  id="cep" placeholder="EX: 00.000-000" value="{{$model->cep}}" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>Municipio:</label>
                <select name="municipio" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($municipio as $m)
                        <option value="{{$m->id}}" {{$model->id_municipio == $m->id  ? 'selected' : ''}}>{{$m->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <label>CPF:</label>
                <input type="text" name="cpf" placeholder="Ex: 000.000.000-00" id="cpf" value="{{$model->cpf}}" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label>RG:</label>
                <input type="text" name="rg" placeholder="Ex: 000.000.000" id="rg" value="{{$model->rg}}" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label>Telefone:</label>
                <input type="text" name="fone" id="fone" placeholder="Ex: (00) 00000-0000" value="{{$model->fone}}" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label>Email:</label>
                <input type="text" name="email" id="email" placeholder="Ex: igreja@igreja.com.br" value="{{$model->email}}" class="form-control" required>
            </div>

            <div class="col-md-2">
                <label>Grau de Instrução:</label>
                <select name="grau" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($grau as $g)
                        <option value="{{$g->id}}" {{$model->id_grau_instrucao == $g->id  ? 'selected' : ''}} >{{$g->descricao}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <label>Profissão:</label>
                <input type="text" name="profissao" placeholder="Ex: Pedreiro ou Advogado" value="{{$model->profissao}}" class="form-control" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <label>Igreja que Congrego:</label>
                <select name="igreja" class="form-control">
                    <option value="#">Selecione...</option>
                    @foreach($igreja as $i)
                        <option value="{{$i->id}}" {{$model->id_igreja == $i->id  ? 'selected' : ''}} >{{$i->razao_social}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label>Nome da Mãe:</label>
                <input type="text" name="nome_mae"  id="nascimento" value="{{$model->nome_mae}}" class="form-control" required>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-2">
                    <a href="{{route('membro-index')}}"class="btn btn-default">Cancelar</a>
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
            $("#nascimento").mask("99/99/9999");
            $("#cep").mask("99.999-999");
            $("#cpf").mask("999.999.999-99");
            $("#fone").mask("(99) 99999-9999");
            $("#rg").mask("999.999.999");
        });
    </script>
@endsection