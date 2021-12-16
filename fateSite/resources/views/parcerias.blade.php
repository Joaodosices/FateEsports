@extends("layout.master")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/parcerias.css') }}" type="text/css">
@endsection

@section('content')

   <div class="container">  
      <h1> As Nossas Parcerias</h1>

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

      <img class="imgmarca" src="{{$partner->img}}">
      </div>
      <div class="containertextomarca">

        <h2 class="titulomarca"> {{$partner->name}} </h2>
        <p class="descricaomarca"> {{$partner->description}} </p>
        </div>
        <a class="linkmarca" target="_blank" href="{{$partner->linkpartner}}"> Visitar Site</a>
         
         </div>

      @endforeach
         
      </div>

   </div>
   
@endsection

@section('scripts')
@endsection