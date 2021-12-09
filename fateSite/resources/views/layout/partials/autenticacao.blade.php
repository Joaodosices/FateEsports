<div class="popUp-background">
    <div class="popUp-content">
        <div class="sairButton">
            <a id="closeLogin" href="#"> <img src="img\autenticacao\close.png" alt=""></a>
        </div>
        <form action="{{ route('login') }}" method="post" id='formLogin'>
            @csrf
            <img src="img/logo/logoFate-01.png" alt="">
            <div class="popUp--input">
                <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"> <br>
                <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password"> <br>
                <button type="submit" value="Login">Login</button>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            <p class="linkRegisto">Não tens conta? <a class="registarbtn" href="#">Regista-te aqui</a></p>
        </form>

        <form action="{{ route('register') }}" method="post" id='formRegister'>
            @csrf
            <img src="img/logo/logoFate-01.png" alt="">
            <div class="popUp--input popUp--input__registo">
                <input type="text"  class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Primeiro nome">
                <input type="text" class="@error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Último nome">
                <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                <input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Palavra Passe">
                <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Verificar palavra passe">
                <button type="submit" >Registar</button>
            </div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <p class="linkRegisto">Já tens conta? <a class="loginBtn" href="#">Dá login aqui</a></p>
        </form>
    </div>
</div>

@section('scripts')
    

@endsection