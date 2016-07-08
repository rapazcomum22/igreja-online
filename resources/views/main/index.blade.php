@extends('layouts.app')
@section('head')
<style>
    .bs-glyphicons {
        margin: 0 -10px 20px;
        overflow: hidden
    }

    .bs-glyphicons-list {
        padding-left: 0;
        list-style: none
    }

    .bs-glyphicons li {
        float: left;
        width: 25%;
        height: 115px;
        padding: 10px;
        font-size: 10px;
        line-height: 1.4;
        text-align: center;
        background-color: #fff;
        border: 1px solid #fff
    }

    .bs-glyphicons .glyphicon {
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 24px
    }

    .bs-glyphicons .glyphicon-class {
        display: block;
        text-align: center;
        word-wrap: break-word
    }
    .bs-glyphicons li {
        color: #495b6c;
        background-color: #fff
    }
    .bs-glyphicons a {
        color: #495b6c;
        background-color: #fff
    }


    .bs-glyphicons li:hover {
        color: #fff;
        background-color: #495b6c
    }
    .bs-glyphicons a:hover {
        color: #fff;
        background-color: #495b6c
    }

    @media (min-width: 768px) {
        .bs-glyphicons {
            margin-right: 0;
            margin-left: 0
        }

        .bs-glyphicons li {
            width: 12.5%;
            font-size: 12px
        }
    }

</style>
@endsection
@section('content')
    <div class="ps-page-header">
        <h1><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>Painel de Controle</h1>
    </div>
    <div class="bs-glyphicons">
        <ul class="bs-glyphicons-list">
            <a href="{{route('membro-index')}}">
                <li>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <span class="glyphicon-class">Membro</span>
                </li>
            </a>
            <a href="{{route('usuario-index')}}">
                <li>
                    <span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">Usuario</span>
                </li>
            </a>
            <a href="{{route('padre-index')}}">
                <li>
                    <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                    <span class="glyphicon-class">Padre</span>
                </li>
            </a>
            <a href="{{route('culto-index')}}">
                <li>
                    <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                    <span class="glyphicon-class">Padre</span>
                </li>
            </a>
        </ul>
    </div>
@endsection