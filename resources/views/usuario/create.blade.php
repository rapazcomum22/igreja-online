{{--Created by PhpStorm.--}}
{{--User: rodrigo--}}
{{--Date: 07/07/16--}}
{{--Time: 13:17--}}
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header">
            <h1><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>Painel de Controle - Adicionar Usuário</h1>
        </div>
    </div>
       <form action="{{route('usuario-adiciona')}}"method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="row form-group">
               <div class="col-md-4">
                   <label>Nome:</label>
                   <input type="text" name="name" class="form-control" required>
               </div>
               <div class="col-md-4">
                   <label>Usuário:</label>
                   <input type="text" name="usuario" class="form-control" required>
               </div>
               <div class="col-md-4">
                   <label>Senha:</label>
                   <input type="password" name="password" class="form-control" required>
               </div>
           </div>
               <div class="panel panel-default">
                   <div class="panel-body">
                       <div class="col-md-2">
                           <a href="{{route('usuario-index')}}"class="btn btn-default">Cancelar</a>
                       </div>
                       <div class="col-md-10 text-right">
                               <button class="btn btn-success">Salvar Alterações</button>
                       </div>
                   </div>
               </div>
       </form>
@endsection