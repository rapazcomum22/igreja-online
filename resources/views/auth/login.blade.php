<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGI - Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            height: 100%;
            background-image: -webkit-linear-gradient(top, #1e9922, #79e083);
            background-image: linear-gradient(to bottom, #1e9922, #79e083);
            background-color: #79e083;
        }

        .height-fix {
            min-height: 100% !important;
        }

        .gradient-primary {

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
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
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
<body id="app-layout">
<div class="fundo">
    <div class="container">
        <div style="padding-top: 150px;">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-md-offset-4 text-center painel-cima">
                    <img src="{{asset('images/logo-principal.png')}}" width="100%" alt="" class="padding-config">
                </div>
            </div>
            <div class="row">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="col-md-offset-4 col-md-4 col-md-offset-4">
                        <label>Usuário:</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="col-md-offset-4 col-md-4 col-md-offset-4">
                        <label>Senha:</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <div class="col-md-offset-4 col-md-4 painel-baixo col-md-offset-4 text-right"
                         style="padding-top: 10px; padding-bottom: 10px">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Place sticky footer content here.</p>
        </div>
    </footer>
</div>
</body>
</html>





