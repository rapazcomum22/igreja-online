<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGI - Admin</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <style>
        body {
            font-family: 'Lato';
        }
    </style>
</head>
<body>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebar hidden-print">
        <ul class="sidebar-nav">
            <!--LOGO PORTAL DO SERVIDOR-->
            <li class="sidebar-brand">
                <a href="#"><img src="{{ asset('/images/logo-pqn.png') }} " alt="SGI"
                                 width="220" height="50"/>

                </a>
            </li>
            <!--/LOGO PORTAL DO SERVIDOR-->

            <!--PERFIL LOGADO-->
            <li class="sidebar-brand-profile">
                <div class="dropdown">
                    <a href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div class="box-perfil">
                                Seja Bem Vindo! <strong> {{ Auth::user()->email }}</strong>
                        </div>
                    </a>
                </div>
            </li>
            <!--/PERFIL LOGDAO-->

            <!--DIVISOR-->
            <li style="margin-bottom: 5px"></li>
            <!--/DIVISOR-->

            <!--MENU-->
            <li>
                <a href="" style="margin-left: -21px;">
                    <div class="div-icon-container">
                        <span class="sidebar-menu-fonts-box glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                    </div>
                    Perfil</a>
            </li>
            <li>
                {{--<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>--}}
                <a href="{{ url('/logout') }}" style="margin-left: -21px;">
                    <div class="div-icon-container">
                        <span class="sidebar-menu-fonts-box glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    </div>
                    Logout</a>
            </li>
            <!--/MENU-->
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="#menu-toggle" id="menu-toggle" class="visible-xs-block">
                        <div class="btn-mobile">
                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                        </div>
                    </a>
                    @if (session('alerta'))
                        <div class="alert alert-{{ session('alerta')['type'] }}">
                            {{ session('alerta')['msg'] }}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<script type="text/javascript" src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/checkbox-x.min.js') }}"></script>
<!-- Menu Toggle Script -->
<script>
    $(document).ready(function () {
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $(window).resize(function () {
            if ($(window).width() <= 745) {
                $("#wrapper").removeClass("toggled");
            }
        });

        $("#btn-font-mais").click(function (e) {
            e.preventDefault();
            $('body').css('font-size', parseInt($('body').css('font-size')) + 2);
            $('h3').css('font-size', parseInt($('h3').css('font-size')) + 2);
        });
        $("#btn-font-menus").click(function (e) {
            e.preventDefault();
            $('body').css('font-size', parseInt($('body').css('font-size')) - 2);
            $('h3').css('font-size', parseInt($('h3').css('font-size')) - 2);
        });
    });
</script>
@yield('script')
</body>
</html>
