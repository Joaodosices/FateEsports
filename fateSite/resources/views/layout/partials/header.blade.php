<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="header">

    <div id="triangle-topleft"> </div>
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                    
        <div class="logo">
            <a href="#" class="logo"><img src="{{ asset('img/header/logo_fate.png') }}" alt="Logo" width="90" height="90"></a>
        </div>
        <div id="header-conteudo">
            <nav>
                <ul>
                    <li> <a class="active" href="{{route('index.main')}}">HOME</a> </li>
            <li> <a href="#loja" class="left">LOJA</a> </li>
            <li> <a href="#equipas">EQUIPAS</a> </li>
            <li> <a href="{{route('partner.index')}}">PARCERIAS</a> </li>
            <li> <a href="{{route('contacts.index')}}">CONTACTOS</a> </li>
            <li> <a href="{{route('gm.sobre')}}">SOBRE</a> </li>
            @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="profile clickProfile" href="#">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @else
            <li> <a class="profile" href="{{route('perfil.index')}}">{{ Auth::user()->name }}</a> </li>
            <li><a class="" href="{{ route('logout') }}"
                                onclick="document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>
                            
            @endguest
            <li> <img src="{{ asset('img/header/profile_icon.png') }}" class="user_profile" alt="user profile" width="50" height="40"></li>
        
        </ul>
        </nav>

    </div>

    

                   
</header>

<nav id="burguer">
                <ul>
            <li> <a class="active" href="{{route('index.main')}}">HOME</a> </li>
            <li> <a href="#loja" class="left">LOJA</a> </li>
            <li> <a href="#equipas">EQUIPAS</a> </li>
            <li> <a href="{{route('gm.parcerias')}}">PARCERIAS</a> </li>
            <li> <a href="{{route('contacts.index')}}">CONTACTOS</a> </li>
            <li> <a href="{{route('gm.sobre')}}">SOBRE</a> </li>
            @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="profile clickProfile" href="#">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @else
            <li> <a class="profile" href="{{route('perfil.index')}}">{{ Auth::user()->name }}</a> </li>
            <li><a class="" href="{{ route('logout') }}"
                                onclick="document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>
                            
            @endguest
            <li> <img src="{{ asset('img/header/profile_icon.png') }}" class="user_profile" alt="user profile" width="50" height="40"></li>
        
        </ul>
        </nav>