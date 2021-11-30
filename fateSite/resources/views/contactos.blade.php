@include("layout.master")

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/paginaContactos.css" />
    @yield("linkCSS")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        
    <title>Página Contactos</title>
</head>

<body>

    <!-- HEADER -->

    @yield("header")

    <!-- HEADER -->

    <div class="tituloPrincipal">
        <h1>CONTACTO <span>FATE ESPORTS</span></h1>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
        </div>
    @endif 
    <div id="areaTotal">
        <div id="areaContacto" class="row">
            <div class="col-xl-7  col-lg-12">
                <div id="areaForm">
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div id="areaNome">
                            <div class="areaFormLabel">
                                <label for="">PRIMEIRO NOME:</label> <br>
                                <input type="text" name="name" class="areaNome"/>
                            </div>
                            <div class="areaFormLabel">
                                <label for="">ULTIMO NOME:</label> <br />
                                <input type="text" name="surname" class="areaNome"/><br />
                            </div>
                        </div>
                        <label for="">EMAIL:</label> <br />
                        <input type="email" name="email" class="areaNome inputForm" />
                        <br />
                        <label for="">ESCOLHA UM TÓPICO:</label><br />
                        <select name="topic" class="inputForm">
                            <option value="geral">Geral</option>
                            <option value="social media">Social Media</option>
                            <option value="equipa">Equipa</option>
                        </select>
                        <br />
                        <label for="">COMENTÁRIO</label> <br />
                        <textarea name="comment" id="areacomentario"  cols="1" rows="1"></textarea>
                        <br />
                        <input type="submit" name="submit" id="botaoForm" value="ENVIAR" />
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12 ">
                <div id="areaTexto">
                    <div id="areaFala" class="tituloSecundario">
                        <h1>FALA<span> CONNOSCO!</span></h1>
                        <p>
                            Para qualquer dúvida, pedido ou sugestão,<br />
                            preenche o seguinte formulário. Responderemos<br />
                            às tuas questões com a maior brevidade possível.
                        </p>
                    </div>
                    <div id="areaInfo" class="tituloSecundario">
                        <h1>FATE ESPORTS <span>INFORMAÇÕES!</span></h1>
                        <div class="areaIcon">
                            <img src="../img/PaginaContactos/localização icon.png" alt="icon localização" width="15px" height="25px" />
                            <p>Morro do Lena 2411-901 Leiria, Portugal</p>
                        </div>
                        <div class="areaIcon">
                            <img src="../img/PaginaContactos/call.png" alt="icon telemovel" width="20px" height="20px" />
                            <p>+365 912345678</p>
                        </div>
                        <div class="areaIcon">
                            <img src="../img/PaginaContactos/@.png" alt="icon @" width="23px" height="23px" />
                            <p>fate.esports21@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="localizacao" class="tituloPrincipal">
            <h1>FATE ESPORTS <span>ESCRITÓRIOS</span> LEIRIA</h1>
            <div style="width: 100%"><iframe width="100%" height="414" frameborder="0" scrolling="no" 
                marginheight="0" marginwidth="0" 
                src="https://maps.google.com/maps?width=100%25&amp;height=414&amp;hl=en&amp;q=Campus%202%20-%20Morro%20do%20Lena,%20Alto%20do%20Vieiro,%20Apt%204163,%20Edif%C3%ADcio%20D,%202411-901%20Leiria+(Escrit%C3%B3rios%20FATE%20ESPORTS)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="http://www.gps.ie/">gps devices</a></iframe></div>
        </div>
    </div>

    
        <!-- footer -->
            @yield("footer")
        <!-- footer      -->
        @yield("auth")
</body>
</html>