<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGI - Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <style>
        html {
            background: url("../../../images/background.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body {
            font-family: 'Lato';
        }
        .painel-cima {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .painel-baixo {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .padding-config {
            padding: 30px 0;
        }
        .col-md-4 {
            background-color: #fff;
        }
        .fundo {
            content: "";
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
            background: transparent\9;
            zoom: 1;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#77FFFFFF, endColorstr=#77FFFFFF);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#77FFFFFF, endColorstr=#77FFFFFF)";
            -webkit-background-size: cover !important;
            -moz-background-size: cover !important;
            -o-background-size: cover !important;
            background-size: cover !important;
            background-position: center center !important;
            background-attachment: fixed !important;
            opacity: 1.0;
        }
    </style>
</head>
<body id="app-layout" class="bg-image">
<div class="fundo">
    <div class="container" style="padding-top: 15%;padding-bottom: 5%">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10 text-center painel-cima">
                    <img src="{{asset('images/logo-principal.png')}}" width="100%" alt="" class="padding-config">
                </div>
            </div>
            <div class="row">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10">
                    <div class="">
                        <label>Usuário:</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="">
                        <label>Senha:</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <div class="painel-baixo text-right"
                         style="padding-top: 10px; padding-bottom: 10px">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> Login
                        </button>
                    </div>
                    </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>





