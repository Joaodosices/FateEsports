@include("layout.master")

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    @yield("linkCSS")
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    
    <!-- HEADER -->

    @yield("header")

    <!-- HEADER -->



    <div class="container">

        <h1> BEM-VINDO, USERNAME </h1>
        <ul>
            <li> <a class="active" href="#"> <img src="img/perfil/profile_icon.png" alt="user profile" width="38"
                        height="35"> DETALHES DA CONTA</a> </li>
            <li> <a class="" href="#"> <img src="img/perfil/order_icon.png" alt="user profile" width="38" height="35">
                    ENCOMENDAS</a> </li>
            <li> <a class="" href="#"> <img src="img/perfil/logout_icon.png" alt="user profile" width="38" height="35">
                    LOGOUT</a> </li>
        </ul>


        <form>



            <div id="primeiro_nome">
                <label for="fname">PRIMEIRO NOME:</label><br>
                <input type="text" id="fname" name="fname"><br>
            </div>

            <div id="ultimo_nome">
                <label for="lname">ÚLTIMO NOME:</label><br>
                <input type="text" id="lname" name="lname">
            </div>


            <div id="email1">
                <br><label for="lname">EMAIL:</label><br>
            </div>
            <div id="email2">
                <input type="email" id="email" name="email">
            </div>
        </form>

        <button class="submitbtn" type="submit" > ALTERAR DADOS </button>

        <h3> ALTERAR PASSWORD </h3>

        <button class="submitbtn2" type="submit" > ALTERAR PASSWORD </button>

    </div>

     <!-- footer -->
     
     @yield("footer")

    <!-- footer      -->

</body>

</html>