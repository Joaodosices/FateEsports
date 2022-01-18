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

        <div class="tudo">
        @if (Session::has('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
                    </div>
        @endif

    <!-- ==========hero-area========== -->
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
        <div class="container-fluid p-0 ">
            <div class="row m-0">
                <div class="col-lg-6 p-0 bg_img" data-background="img/sobre/fundo1.jpg">
                    <!--mudar -->
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
                                    <p>Lorem ipsum dolor sit ampendisse illum elit nunc suspendisse dolor, sed nulla nec, tempor amet ac venenatis praesent libero. Ante ea justo aptent</p>
                                </div>
                                <div class="choose-item">
                                    <h4 class="title">Doação de 25% dos lucros.</h4>
                                    <p>Lorem ipsum dolor sit ampendisse illum elit nunc suspendisse dolor, sed nulla nec, tempor amet ac venenatis praesent libero. Ante ea justo aptent</p>
                                </div>
                                <div class="choose-item">
                                    <h4 class="title">Suporte 24/7.</h4>
                                    <p>Lorem ipsum dolor sit ampendisse illum elit nunc suspendisse dolor, sed nulla nec, tempor amet ac venenatis praesent libero. Ante ea justo aptent</p>
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
                        <p>Lorem ipsum dolor sit ampendisse illum elit nunc suspendisse dolor, sed nulla nec, tempor amet ac venenatis praesent libero. Ante ea justo aptentLorem ipsum dolor sit ampendisse illum elit nunc suspendisse dolor, sed nulla nec,
                            tempor amet ac venenatis praesent libero. Ante ea justo aptent</p>
                    </div>
                </div>
            </div>
            <div class="row mb-30-none justify-content-center">
                @foreach($users as $user)
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="CEO-item CEO-item-two">
                        <div class="c-thumb">
                            <a href="CEO-profile.html">
                                <img src="{{$user->img}}" alt="CEO">
                            </a>
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
                            <div id="backoffice-sobre">
                                <div  id="backoffice-titulo">
                                    <h1 >BACK <span>OFFICE</span></h1>
                                </div>
                            <table id="tabela">
                                <tbody>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>imagem</th>
                                    <th>facebook</th>
                                    <th>instagram</th>
                                    <th>twitter</th>
                                    <th>Delete</th>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td> <img src="{{$user->img}}"></td>
                                        <td>{{ $user->facebook }}</td>
                                        <td>{{ $user->instagram }}</td>
                                        <td>{{ $user->twitter }}</td>
                                        <td><a href="sobre/delete/{{ $user->id }}"><img class="eliminar"  src="{{ asset('img\paginacontactos\trash.png') }}"></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            @endif
                            </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js" integrity="sha512-gWlyRVDsJvp5kesJt4cSdPPLZIBdln/uSwzYgUicQcbTgRNQE4QhP5KUBIYlLYLkiKIQiuD7KUMHzqGNW/D2bQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/sobre/sobreanimacao.js" type="text/javascript"></script> 
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

@endsection