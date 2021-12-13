@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/paginaContactos.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')
    <div class="container">
        <div class="tituloPrincipal">
            <h1>CONTACTO <span>FATE ESPORTS</span></h1>
        </div>
        
        <div id="areaTotal">
        
            <div id="areaContacto" class="row">
            
                <div class="col-xl-7  col-lg-12">

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
                    </div>
                @endif 
                
                    <div id="areaForm">
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div id="areaNome">
                                <div class="areaFormLabel">
                                    <label for="">PRIMEIRO NOME:</label> <br>
                                    <input type="text" name="name" class="areaNome" required/>
                                </div>
                                <div class="areaFormLabel">
                                    <label for="">ULTIMO NOME:</label> <br />
                                    <input type="text" name="surname" class="areaNome" required/><br />
                                </div>
                            </div>
                            <label for="">EMAIL:</label> <br />
                            <input type="email" name="email" class="areaNome inputForm" required />
                            <br />
                            <label for="">ESCOLHA UM TÓPICO:</label><br />
                            <select name="topic" class="inputForm" required>
                                <option value="geral">Geral</option>
                                <option value="social media">Social Media</option>
                                <option value="equipa">Equipa</option>
                            </select>
                            <br />
                            <label for="">COMENTÁRIO</label> <br />
                            <textarea name="comment" id="areacomentario"  cols="1" rows="1" required    ></textarea>
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
                            @if(Auth::check())
                            <div id="area-tabela-admin">
                            <!-- como buscar informação -->
                            <table id="tabela-admin">
                                <tbody>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Topic</th>
                                    <th>Comment</th>
                                    <th>Delete</th>
                                    @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->surname }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->topic }}</td>
                                        <td>{{ $contact->comment }}</td>
                                        <td><a href="contactos/delete/{{ $contact->id }}"><img src="{{ asset('img\autenticacao\close.png') }}" alt="cruz para apagar"></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            @endif


        </div>
          
        </div>  
        <div id="localizacao" class="tituloPrincipal">
                <h1>FATE ESPORTS <span>ESCRITÓRIOS</span> LEIRIA</h1>
                <div style="width: 100%"><iframe width="100%" height="414" frameborder="0" scrolling="no" 
                    marginheight="0" marginwidth="0" 
                    src="https://maps.google.com/maps?width=100%25&amp;height=414&amp;hl=en&amp;q=Campus%202%20-%20Morro%20do%20Lena,%20Alto%20do%20Vieiro,%20Apt%204163,%20Edif%C3%ADcio%20D,%202411-901%20Leiria+(Escrit%C3%B3rios%20FATE%20ESPORTS)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    <a href="http://www.gps.ie/">gps devices</a></iframe>
                </div>
            </div>
@endsection

@section('scripts')
@endsection