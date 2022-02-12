@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" type="text/css">
    
    
@endsection

@section('content')

                @if (Session::has('success'))
                    <div class="alert-success">
                     {{ Session::get('success') }}
                    </div>
                @endif 

    <div class="container">

        <h1> Bem-Vindo, <span> {{ Auth::user()->name }} </span>!</h1>

        <ul>
            <li id="detalhe_conta"> <a href="#"> <img src="{{ asset('img/perfil/profile_icon.png') }}" alt="user profile" width="38"
                        height="35"> DETALHES DA CONTA</a> </li>
            <li> <a class="" href="{{ route('logout') }}"
                                onclick="document.getElementById('logout-form').submit();"> <img src="{{ asset('img/perfil/logout_icon.png') }}" alt="user profile" width="38" height="35">
                    LOGOUT</a> </li>
        </ul>

        <form method="post" action="{{ route('perfil.update' )}}" >
        @csrf
            <div id="primeiro_nome">
                <label for="fname">PRIMEIRO NOME:</label><br>
                <input disabled type="text" id="fname" name="name" value="{{ Auth::user()->name }}" ><br>
            </div>

            <div id="ultimo_nome">
                <label for="lname">ÚLTIMO NOME:</label><br>
                <input disabled type="text" id="lname" name="surname" value="{{ Auth::user()->surname }}">
            </div>


            <div id="email1">
                <br><label for="lname">EMAIL:</label><br>
            </div>
            <div id="email2">
                <input disabled type="email" id="email" name="email" value="{{ Auth::user()->email }}">
            </div>
       

            <button type="button" class="submitbtn" id="alterar">  ALTERAR DADOS</button>

            <button class="submitbtn" id="submeter" type="submit" " onclick="return confirm('Tem a certeza que deseja editar?')" > SUBMETER </button>
        </form>

        <div class="panel-body">
                    @if (session('error'))
                        <div id="error_pass_atual">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div id="error_pass_atual">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('changePasswordPost') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            

                            <div id="atual_pass">
                                <label for="new-password" id="label_pass_atual" >PASSWORD ATUAL:</label>
                                <input disabled id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span id="error_pass_atual">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            

                            <div id="nova_pass">
                                <label for="new-password" id="label_pass_nova">NOVA PASSWORD:</label>
                                <input disabled id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="confirm_nova_pass">
                            <label for="new-password-confirm" id="label_confirma_pass">CONFIRMAR NOVA PASSWORD:</label>
                            <input disabled id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                        </div>

                        <div class="form-group">

                        <button type="button" class="submitbtn2" id="alterarpass" > ALTERAR PASSWORD </button>
                        <button class="submitbtn" id="submeterpass" type="submit" onclick="return confirm('Tem a certeza que deseja alterar a password?')"> SUBMETER </button>
                        
                        </div>
                    </form>
                </div>

        
        

    </div>

    <!-- Backoffice -->

    @if(Session::get('authAdmin') == 1)
                            <div id="backoffice-perfil">
                                <div  id="backoffice-titulo">
                                    <h1 >ADMIN <span>SIDE</span></h1>
                                </div>
                            <table id="tabela">
                                <tbody>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Delete</th>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a href="utilizadores/delete/{{ $user->id }}" onclick="return confirm('Tem a certeza que deseja eliminar?')" ><img class="eliminar"  src="{{ asset('img\paginacontactos\trash.png') }}"></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginacao">
                                    {{ $users->links() }}
                                </div>
                            </div>
                            @endif



@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js" integrity="sha512-gWlyRVDsJvp5kesJt4cSdPPLZIBdln/uSwzYgUicQcbTgRNQE4QhP5KUBIYlLYLkiKIQiuD7KUMHzqGNW/D2bQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/perfil.js') }}" type="text/javascript"></script> 
@endsection