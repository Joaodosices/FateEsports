@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" type="text/css">
    
@endsection

@section('content')

    <div class="container">

    @foreach($users as $user)
                @if($user->id == Auth::id())
        <h1> Bem-Vindo, <span> {{ $user->name }} </span> </h1>
            @endif
        @endforeach
        <ul>
            <li> <a class="active" href="#"> <img src="img/perfil/profile_icon.png" alt="user profile" width="38"
                        height="35"> DETALHES DA CONTA</a> </li>
            <li> <a class="" href="#"> <img src="img/perfil/order_icon.png" alt="user profile" width="38" height="35">
                    ENCOMENDAS</a> </li>
            <li> <a class="" href="#"> <img src="img/perfil/logout_icon.png" alt="user profile" width="38" height="35">
                    LOGOUT</a> </li>
        </ul>


        <form method="post" action="{{ route('perfil.update' )}}" >
        @csrf
            @foreach($users as $user)
                @if($user->id == Auth::id())
                    <div id="primeiro_nome">
                    <label for="fname">PRIMEIRO NOME:</label><br>
                    <input disabled type="text" id="fname" name="name" value="{{ $user->name }}" ><br>
                </div>

                <div id="ultimo_nome">
                    <label for="lname">ÚLTIMO NOME:</label><br>
                    <input disabled type="text" id="lname" name="surname" value="{{ $user->surname }}">
                </div>


                <div id="email1">
                    <br><label for="lname">EMAIL:</label><br>
                </div>
                <div id="email2">
                    <input disabled type="email" id="email" name="email" value="{{ $user->email }}">
                </div>
                @endif
            @endforeach
       

            <button type="button" class="submitbtn" id="alterar">  ALTERAR DADOS</button>

            <button class="submitbtn" id="submeter" type="submit" " > SUBMETER </button>

            <h3> ALTERAR PASSWORD </h3>

            <button type="button" class="submitbtn2" type="submit" > ALTERAR PASSWORD </button>
        </form>

    </div>


@endsection

@section('scripts')
<script src="js/perfil.js" type="text/javascript"></script> 
@endsection