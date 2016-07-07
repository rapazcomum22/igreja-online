 {{--Created by PhpStorm.--}}
 {{--User: rodrigo--}}
 {{--Date: 07/07/16--}}
 {{--Time: 12:44--}}
 @extends('layouts.app')
 @section('head')

 @endsection
 @section('content')
     <div class="row">
         <div class="col-md-12 ps-page-header">
             <h1><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>Painel de Controle - Usuário</h1>
         </div>
     </div>
     <div class="col-md-12">
         <h4>
             <a href="{{route('usuario-create')}}" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Usuário</a>
         </h4>
     </div>
     <div class="row">
         <div class="col-md-12 ps-page-header">
             <h1>Lista de Usuários Registrados</h1>
         </div>
         <div class="form-group col-md-12">
             @foreach($model as $m)
                 <div class="panel panel-default">
                     <div class="panel-body">
                         <div class="row">
                             <p class="col-md-10">
                                Nome: <span>{{$m->name}}</span> | Usuario: <span>{{$m->email}}</span>
                             </p>
                             <div class="col-md-2 col-xs-6">
                                 <a href="{{route('usuario-edit', ['id' => $m->id])}}"class="btn btn-sm btn-block btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 @endsection