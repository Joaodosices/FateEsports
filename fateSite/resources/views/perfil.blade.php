@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" type="text/css">
    
@endsection

@section('content')

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
   
@endsection

@section('scripts')
@endsection