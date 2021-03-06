<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <div id="triangulo-icon">

                <div id="triangle-topright"> </div>
                
                <a class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
               </a>

        </div> 

        <nav id="header-conteudo">
        <a href="" class="logo"><img class="nav-logo" src="{{ asset('img/header/logo_fate.png') }}" alt="Logo" width="90" height="90"></a>
        <ul id="lista-nav" >
            <li><a href="{{route('index.main')}}">HOME</a></li>
            <li><a href="http://fateshop.infinityfreeapp.com/" class="left">LOJA</a></li>
            <li><a href="{{route('games.index')}}">EQUIPAS</a></li>
            <li><a href="{{route('partner.index')}}">PARCERIAS</a> </li>
            <li><a href="{{route('contacts.index')}}">CONTACTOS</a></li>
            <li><a href="{{route('admins.index')}}">SOBRE</a></li>
            <div class="nav-gap">
            @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="profile clickProfile" id="mobileLogin" href="#">{{ __('Login') }}</a>
                    </li>
            @endif
            @else
                <li> <a class="profile" href="{{route('perfil.index')}}">{{ Auth::user()->name }}</a> </li>
                <li><a class="" href="{{ route('logout') }}"
                                onclick="document.getElementById('logout-form').submit();"> <img src="{{ asset('img/perfil/logout_icon.png') }}" alt="user profile" width="30" height="30">
                                
                            </a></li>
            @endguest
            
        </div>
        </ul>
    </nav>

</header>
