@section("header")
<header>
            <div class="header">
                <div class="logo">
                    <a href="#" class="logo"><img src="img/header/logo_fate.png" alt="Logo" width="90" height="90"></a>
                </div>
                <div class="header-conteudo">
                    <nav>
                        <ul>
                            <li> <a class="active" href="{{route('gm.index')}}">HOME</a> </li>
                    <li> <a href="#loja" class="left">LOJA</a> </li>
                    <li> <a href="#equipas">EQUIPAS</a> </li>
                    <li> <a href="{{route('gm.parcerias')}}">PARCERIAS</a> </li>
                    <li> <a href="{{route('gm.contactos')}}">CONTACTOS</a> </li>
                    <li> <a href="{{route('gm.sobre')}}">SOBRE</a> </li>
                    <li> <a class="profile" href="{{route('gm.perfil')}}">USERNAME</a> </li>
                    <li> <img src="img/header/profile_icon.png" class="user_profile" alt="user profile" width="50" height="40"> </li>
                
                </ul>
                </nav>
        
            </div>
        </header>
@endsection