@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/parcerias.css') }}" type="text/css">
@endsection

@section('content')

@if (Session::has('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
                    </div>
                @endif

   <div class="container">  
      <h1 class="titulopaginaparcerias"> As Nossas <span class="DestaqueTitulo"> Parcerias</span></h1>

      <div id="textoinicio">
         A nossa organização não só tem o apoio de todos os nossos fãs como também temos as nossas 
         parcerias que trabalham connosco para melhorar a experiência em diversos âmbitos tanto para
         os nossos jogadores como também para os nossos fãs, com colaborações e ideias inovadoras
         ao mais alto nível.
      </div> 

      <hr>

      <div id="grid-marcas">
      
      @foreach($partners as $partner)

      <div class="grid-item">

        <div class="containerimgmarca"> 

        <a class="linkmarca" target="_blank" href="{{$partner->linkpartner}}"><img class="imgmarca" src="{{$partner->img}}"></a>
      </div>
      <div class="containertextomarca">

        <h2 class="titulomarca"> {{$partner->name}} </h2>
        <p class="descricaomarca"> {{$partner->description}} </p>
        </div>

         
         </div>

      @endforeach
         
      </div>

   </div>

   @if(Session::get('authAdmin') == 1)
                            <div id="backoffice-parcerias">
                                <div  id="backoffice-titulo">
                                    <h1 >Admin <span class="DestaqueTitulo">Side</span></h1>
                                </div>              
                            
                            <table id="tabela">
                                <tbody>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Link do Parceiro</th>
                                    <th>Imagem</th>
                                    <th>Mostrar</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                    @foreach($partners as $partner)
                                    <form method="post" action="/parcerias/{{ $partner->id }}" >
                                    @csrf
                                
                                    <tr>

                                        <td><input readOnly type="text" name="changename" class="nameadmin"  value="{{ $partner->name }}"></td>
                                        <td><textarea readOnly type="text" name="changedescription" class="descriptionadmin" cols="1" rows="1">{{ $partner->description }}</textarea></td>
                                        <td><input readOnly type="text" name="changelinkpartner" class="linkpartneradmin1"  value="{{ $partner->linkpartner }}"></td>
                                        <td> <img class="marcaimgadmin" style="display:none " src="{{$partner->img}}"><div class="linkpartneradmin"><input readOnly type="text" name="changeimg" class="imgadmin"  value="{{ $partner->img }}"></div></td>
                                        <td>
                                            <img  class="eliminar btadminimgmostrar"  src="{{ asset('img\parcerias\mostrar.png')}}">
                                            <img  class="eliminar btadminimgesconder" style="display:none" src="{{ asset('img\parcerias\fechar.png')}}">
                                        </td>
                                        <td>
                                            <img  class="eliminar btadmineditar"  src="{{ asset('img\parcerias\editar.png')}}">
                                            <!-- <img  class="eliminar btadminconfirmar" style="display:none "  src="{{ asset('img\parcerias\confirmar.png')}}"></td> -->
                                            <button style="background: url({{ asset('img\parcerias\editar.png')}})" class="eliminar btadminconfirmar" type="submit"  > SUBMETER </button>
                                        <td><a href="parcerias/delete/{{ $partner->id }}"><img class="eliminar"  src="{{ asset('img\paginacontactos\trash.png') }}"></a></td>
                                    </tr>
                                    </form>
                                    @endforeach

                                    
                                    
                                </tbody>
                            </table>
                            
                            </div>
                            @endif
   
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js" integrity="sha512-gWlyRVDsJvp5kesJt4cSdPPLZIBdln/uSwzYgUicQcbTgRNQE4QhP5KUBIYlLYLkiKIQiuD7KUMHzqGNW/D2bQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/parcerias.js') }}"></script>

<script>
    const l = document.getElementsByClassName("btadminimgesconder").length;
    const ll = document.getElementsByClassName("btadminimgmostrar").length;
    const lll = document.getElementsByClassName("btadmineditar").length;
    const llll = document.getElementsByClassName("btadminconfirmar").length;


   


    for (let i = 0; i < ll; i++) {
       document.getElementsByClassName("btadminimgmostrar")[i].onclick = function(){
        document.getElementsByClassName("btadminimgmostrar")[i].style.display = "none"
        document.getElementsByClassName("btadminimgesconder")[i].style.display = "inline"
        document.getElementsByClassName("marcaimgadmin")[i].style.display = "inline"
        document.getElementsByClassName("linkpartneradmin")[i].style.display = "none"
       }    
        

    }
    

    
    for (let i = 0; i < l; i++) {
       document.getElementsByClassName("btadminimgesconder")[i].onclick = function(){
        document.getElementsByClassName("btadminimgesconder")[i].style.display = "none"
        document.getElementsByClassName("btadminimgmostrar")[i].style.display = "inline"
        document.getElementsByClassName("marcaimgadmin")[i].style.display = "none"
        document.getElementsByClassName("linkpartneradmin")[i].style.display = "inline"
       }    
        

    }
  

      
    for (let i = 0; i < lll; i++) {
       document.getElementsByClassName("btadmineditar")[i].onclick = function(){
        document.getElementsByClassName("btadminconfirmar")[i].style.display = "inline"
        document.getElementsByClassName("btadmineditar")[i].style.display = "none"
        document.getElementsByClassName("nameadmin")[i].readOnly = false;
        document.getElementsByClassName("descriptionadmin")[i].readOnly = false;
        document.getElementsByClassName("linkpartneradmin1")[i].readOnly = false;
        document.getElementsByClassName("imgadmin")[i].readOnly = false;
       }    
        

    }

      
    for (let i = 0; i < llll; i++) {
       document.getElementsByClassName("btadminconfirmar")[i].onclick = function(){
        document.getElementsByClassName("btadminconfirmar")[i].style.display = "none"
        document.getElementsByClassName("btadmineditar")[i].style.display = "inline"
        document.getElementsByClassName("nameadmin")[i].readOnly = true;
        document.getElementsByClassName("descriptionadmin")[i].readOnly = true;
        document.getElementsByClassName("linkpartneradmin1")[i].readOnly = true;
        document.getElementsByClassName("imgadmin")[i].readOnly = true;
       }    
        

    }

   
    

</script>

@endsection