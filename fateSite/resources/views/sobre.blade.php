@extends('layout.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sobre/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre/main.css') }}">
    @endsection
    <body>
@section('content')

        @if (Session::has('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
                    </div>
        @endif

    <!-- ==========hero-area========== -->
    <br>
    <section class="hero-section">
        <div class="hero-area bg_img" data-background="img/sobre/hero.jpg">
            <!--mudar -->
            <div class="container">
                <h1 class="title">about us</h1>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    Fate Esports
                </li>
            </ul>
        </div>
    </section>
    <!-- ==========hero-area========== -->
    <br><br><br><br>
    <!-- ==========overview-two-section========== -->
    <section class="overview-two-section overview-three-section">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 p-0 bg_img" data-background="img/sobre/fundo1.jpg">
                </div>
                <div class="col-lg-6 p-0">
                    <div class="overview-two-content w-100 h-100 padding-top padding-bottom theme-overlay-deep bg_img" data-background="img/sobre/fundo2.png">
                        <div class="content">
                            <div class="section-header mb-low light left-style">
                                <h2 class="title">Porque apoiar a Fate Esports?</h2>
                                <span class="d-inline-block mx-auto shape-header"></span>
                            </div>
                            <div class="choose-area light-color">
                                <div class="choose-item">
                                    <h4 class="title">Produtos de alta qualidade.</h4>
                                    <p>Todos os produtos vendidos na loja Fate são produtos da mais alta qualidade com o objetivo de oferecer o maior conforto a um custo justo. </p>
                                </div>
                                <div class="choose-item">
                                    <h4 class="title">Doação de 25% dos lucros.</h4>
                                    <p>25% de todos os lucros obtidos através da nossa loja e torneios serão separados para apoiar as causas mais necessitadas.</p>
                                </div>
                                <div class="choose-item">
                                    <h4 class="title">Suporte 24/7.</h4>
                                    <p>Suporte e atendimento pessoal a qualquer hora na nossa página contactos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========overview-two-section========== -->
    <!-- ==========CEO-section========== -->
    <section class="CEO-section padding-top">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-7">
                    <div class="section-header left-style">
                        <h2 class="title">CEO Team</h2>
                        <span class="d-inline-block mx-auto shape-header"></span>
                    </div>
                </div>
            </div>
            <div class="row mb-30-none justify-content-center">
                @foreach($users as $user)
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="CEO-item CEO-item-two">
                        <div class="c-thumb">
                            <img href="CEO-profile.html" >
                                <img src="{{$user->img}}" width="auto"  height="340" alt="CEO">
                            </img>
                        </div>
                        <div class="CEO-content">
                            <h4 class="sub-title">
                                <a href="CEO-profile.html">{{$user->name}} {{$user->surname}}</a>
                            </h4>
                            <ul class="social">
                               
                                    <a target="_blank" href="{{$user->facebook}}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                               
                                    <a target="_blank" href="{{$user->twitter}}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                             
                                    <a target="_blank" href="{{$user->instagram}}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==========CEO-section========== -->
    <br><br>
    <!-- ==========counter-section========== -->
    <div class="counter-two-section padding-top padding-bottom bg_img theme-overlay" data-background="img/sobre/conta.jpg">
        <!--mudar -->
        <!-- imagem de fundo para os nmrs -->
        <div class="container">
            <div class="d-flex flex-wrap text-center justify-content-between mb-30-none">
                <div class="counter-item counter-item-two">
                    <div class="odometer" data-odometer-final="24">0</div>
                    <h3 class="sub-title">Afiliados</h3>
                </div>
                <div class="counter-item counter-item-two">
                    <div class="odometer plus" data-odometer-final="615">0 <span>+</span></div>
                    <h3 class="sub-title">Apoiantes</h3>
                </div>
                <div class="counter-item counter-item-two">
                    <div class="odometer" data-odometer-final="184">0</div>
                    <h3 class="sub-title">Vendas</h3>
                </div>
                <div class="counter-item counter-item-two">
                    <div class="odometer" data-odometer-final="18">0</div>
                    <h3 class="sub-title">Causas</h3>
                </div>
            </div>
        </div>
    </div>

    @if(Session::get('authAdmin') == 1)
                            <div id="backoffice-perfil">
                                <div  id="backoffice-titulo">
                                    <h1 >BACK <span>OFFICE</span></h1>
                                </div>
                            <table id="tabela">
                                <tbody>
                                    <th>Name</th>
                                    <th>Apelido</th>
                                    <th>facebook</th>
                                    <th>instagram</th>
                                    <th>twitter</th>
                                    <th>imagem</th>
                                    <th>mostrar</th>
                                    <th>editar</th>
                                    <th>Eliminar</th>
                                    @foreach($users as $user)
                                    <form method="post" action="/sobre/{{ $user->id }}">
                                    @csrf
                                    <tr>
                                        <td><input readOnly type="text" name="changename" class="nameadmin"  value="{{ $user->name }}"></td>
                                        <td><input readOnly type="text" name="changesurname" class="surnameadmin"  value="{{ $user->surname }}"></td>
                                        <td><input readOnly type="text" name="changefacebook" class="facebookadmin"  value="{{ $user->facebook }}"></td>
                                        <td><input readOnly type="text" name="changeinstagram" class="instagramadmin"  value="{{ $user->instagram }}"></td>
                                        <td><input readOnly type="text" name="changetwitter" class="twitteradmin"  value="{{ $user->twitter }}"></td>
                                        <td><img class="adminimgadmin" style="display:none " src="{{$user->img}}"><div class="linkimgdmin">
                                            <input readOnly type="text" name="changeimg" class="imgadmin"  value="{{ $user->img }}"></div></td>
                                        
                                        <td>
                                            <img  class="eliminar btadminimgmostrar"  src="{{ asset('img\parcerias\mostrar.png')}}">
                                            <img  class="eliminar btadminimgesconder" style="display:none" src="{{ asset('img\parcerias\fechar.png')}}">
                                        </td>
                                        <td>
                                            <img  class="eliminar btadmineditar"  src="{{ asset('img\parcerias\editar.png')}}">
                                            <button style="background: url({{ asset('img\parcerias\editar.png')}})" class="eliminar btadminconfirmar" type="submit"> SUB </button>


                                        <td><a href="sobre/delete/{{ $user->id }}"><img class="eliminar"  src="{{ asset('img\paginacontactos\trash.png') }}"></a></td>
                                    </tr>
                                    </form>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            @endif

@endsection

@section('scripts')
    <script src="{{ asset('js/sobre/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/sobre/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/sobre/plugins.js') }}"></script>
    <script src="{{ asset('js/sobre/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sobre/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/sobre/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('js/sobre/lightcase.js') }}"></script>
    <script src="{{ asset('js/sobre/swiper.min.js') }}"></script>
    <script src="{{ asset('js/sobre/wow.min.js') }}"></script>
    <script src="{{ asset('js/sobre/countdown.min.js') }}"></script>
    <script src="{{ asset('js/sobre/odometer.min.js') }}"></script>
    <script src="{{ asset('js/sobre/viewport.jquery.js') }}"></script>
    <script src="{{ asset('js/sobre/nice-select.js') }}"></script>
    <script src="{{ asset('js/sobre/main.js') }}"></script>

<!-- ==================== -->

<script>
    const l = document.getElementsByClassName("btadminimgesconder").length;
    const ll = document.getElementsByClassName("btadminimgmostrar").length;
    const lll = document.getElementsByClassName("btadmineditar").length;
    const llll = document.getElementsByClassName("btadminconfirmar").length;


   


    for (let i = 0; i < ll; i++) {
        document.getElementsByClassName("btadminimgmostrar")[i].onclick = function(){
        document.getElementsByClassName("btadminimgmostrar")[i].style.display = "none"
        document.getElementsByClassName("btadminimgesconder")[i].style.display = "inline"
        document.getElementsByClassName("adminimgadmin")[i].style.display = "inline"
        document.getElementsByClassName("linkimgdmin")[i].style.display = "none"
       }    
        

    }
    

    
    for (let i = 0; i < l; i++) {
        document.getElementsByClassName("btadminimgesconder")[i].onclick = function(){
        document.getElementsByClassName("btadminimgesconder")[i].style.display = "none"
        document.getElementsByClassName("btadminimgmostrar")[i].style.display = "inline"
        document.getElementsByClassName("adminimgadmin")[i].style.display = "none"
        document.getElementsByClassName("linkimgdmin")[i].style.display = "inline"
       }    
        

    }
  

      
    for (let i = 0; i < lll; i++) {
        document.getElementsByClassName("btadmineditar")[i].onclick = function(){
        document.getElementsByClassName("btadminconfirmar")[i].style.display = "inline"
        document.getElementsByClassName("btadmineditar")[i].style.display = "none"
        document.getElementsByClassName("nameadmin")[i].readOnly = false;
        document.getElementsByClassName("surnameadmin")[i].readOnly = false;
        document.getElementsByClassName("facebookadmin")[i].readOnly = false;
        document.getElementsByClassName("instagramadmin")[i].readOnly = false;
        document.getElementsByClassName("twitteradmin")[i].readOnly = false;
        document.getElementsByClassName("imgadmin")[i].readOnly = false;
       }    
        

    }

      
    for (let i = 0; i < llll; i++) {
        document.getElementsByClassName("btadminconfirmar")[i].onclick = function(){
        document.getElementsByClassName("btadminconfirmar")[i].style.display = "none"
        document.getElementsByClassName("btadmineditar")[i].style.display = "inline"
        document.getElementsByClassName("nameadmin")[i].readOnly = true;
        document.getElementsByClassName("surnameadmin")[i].readOnly = true;
        document.getElementsByClassName("facebookadmin")[i].readOnly = true;
        document.getElementsByClassName("insagramadmin")[i].readOnly = true;
        document.getElementsByClassName("twitteradmin")[i].readOnly = true;
        document.getElementsByClassName("imgadmin")[i].readOnly = true;
       }    
        

    }

</script>
@endsection