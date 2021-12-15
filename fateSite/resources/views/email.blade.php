@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/email.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')

    @if(Session::get('authAdmin') == 1)
        <div class="container">
            <div id="cabeçalho-email">
            <h4 class="email-head">Nova Resposta</h4>
                <form action="{{url('/email')}}" method="post">
                @csrf
                    <label for="subject" class="email-label-titulos">Assunto:</label>
                    <input type="text" name="subject" placeholder="subject..." class="email-label" value="{{$contact->topic}}" required/><br>
                    <label for="subject" class="email-label-titulos">Resposta:</label>
                    <textarea name="email" id="email-text" cols="1" rows="1" required></textarea>
                    <input type="hidden" name="address" value="{{$contact->email}}">
                        <div id="area-botao">
                            <div id="area-reset">
                                <button class="botao-reset" type="reset">
                                    <img src="{{ asset('img\paginacontactos\trash.png') }}">
                                </button>
                            </div>
                            <div id="botao-submit">
                                <input type="submit" name="submit" id="botaoForm" value="ENVIAR" />
                            </div>
                        </div>
                        
                </form>
            </div>

        </div>

    @endif

@endsection

@section('scripts')
@endsection 
