<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('css/custom_adm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body style="height: 100%;">
<nav class="navbar fixed-top ">
        <div class="navbar-content">
            <div class="bars ms-3">
                <i class="fa-solid fa-bars"></i>
            </div>
            <img src="images/logo/logo.png" alt="Dashboard" class="logo">
        </div>

        <div class="navbar-content me-3">
            <div class="notification">
                <div class="dropdown-menu">
                    <div class="dropdown-content ">
                        <li>
                            <img src="images/users/user.jpg" alt="Usuario" width="40">
                            <div class="text">
                                Fusce ut leo pretium, luctus elit id, vulputate lectus.
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="avatar">
                <img src="images/users/user.jpg" alt="Usuario" width="40">
                <div class="dropdown-menu setting">
                    <div class="item">
                        <span class="fa-solid fa-user"></span> Perfil
                    </div>
                    <div class="item">
                        <span class="fa-solid fa-gear"></span> Configuração
                    </div>
                    
                    <div class="item">
                        <span class="fa-solid fa-arrow-right-from-bracket"></span> Sair
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fim Navbar -->

    <!-- Inicio Conteudo -->
    <div class="content">
        <!-- Inicio da Sidebar -->
        <div class="sidebar fixed-left">

            <a href="{{ URL::to('/') }}" class="sidebar-nav"><i class="icon fa-solid fa-list"></i><span>Dashboard</span></a>

            <a href="{{ URL::to('/') }}" class="sidebar-nav"><i class="icon fa-solid fa-list"></i><span>Dashboard</span></a>

            <a href="{{ URL::to('produtos') }}" class="sidebar-nav"><i class="icon fa-solid fa-shop"></i><span>Produtos</span></a>

            

            <a href="{{ URL::to('movimentacao') }}" class="sidebar-nav"><i class="icon fa-solid fa-comments-dollar"></i><span>Movimentação</span></a>

            <a href="{{ URL::to('vendas') }}" class="sidebar-nav"><i class="icon fa-sharp fa-solid fa-hand-holding-dollar"></i><span>Caixa</span></a>
            
            <form action="/logout" method="post">
                @csrf
                <a href="{{ URL::to('logout') }}" class="sidebar-nav" onclick="event.preventDefault(); this.closest('form').submit()"><i
                    class="icon fa-solid fa-arrow-right-from-bracket"></i><span>Sair</span>
                </a>
            </form>        

        </div>
        <!-- Fim da Sidebar -->

    @yield('content')

    </div>
    <!-- Fim Conteudo -->
    <script src="{{ asset('js/custom_adm.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>