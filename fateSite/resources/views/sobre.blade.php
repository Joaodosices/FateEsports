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
        <div class="container-fluid p-0">
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

    <!-- ==========instructor-section========== -->
    <section class="instructor-section padding-top">
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
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="img/sobre/ceo01.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">Alexandre Maia</a>
                            </h4>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="img/sobre/ceo02.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">Diogo Gonçalves</a>
                            </h4>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="img/sobre/ceo03.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">João Fonseca</a>
                            </h4>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="img/sobre/ceo04.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">Luís Carvalho</a>
                            </h4>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="img/sobre/ceo05.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">Luís Claudino</a>
                            </h4>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========instructor-section========== -->
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
                    <div class="odometer plus" data-odometer-final="600">0 <span>+</span></div>
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
@endsection