@include("layout.master")

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\parcerias.css">
    <link rel="icon" href="img/logoFate-01.png" type="image/png">
    @yield("linkCSS")
    <link rel="stylesheet" type="text/css" href="css/parcerias.css">
    <title>Fate Esports Parcerias</title>
</head>

<body>

   @yield("header")

   <div class="container"> 
   <h1> As Nossas Parcerias</h1>

   <div id="textoinicio">A nossa organização não só tem o apoio de todos os nossos fãs como também temos as nossas 
    parcerias que trabalham connosco para melhorar a experiência em diversos âmbitos tanto para
    os nossos jogadores como também para os nossos fãs, com colaborações e ideias inovadoras
    ao mais alto nível.</div> 
   
 </div>

   <hr>

   <div id="marcas">
   
      <div id="redbullcaixa">

         <img id="redbull" src="img/parcerias/red-bull-logo-2-1.png" alt="" width="223"> 

         <h2 id="redbull">Red Bull</h2>

         <div id="redbulltexto">Lorem ipsum dolor sit amet
            consectetuer adipiscing elit
            sed diam nonummy nibh
            euismod tincidunt ut laoreet
            dolore magna aliquam era.</div>

            <p id="hipersite"><a href="">Visitar Site</a></p>  
      </div>


   <div id="razercaixa">

      <img id="razer" src="img/parcerias/Razer-Logo-Horizontal-1-1.png" alt="" width="223"> 

      <h2 id="razer">Razer</h2>

      <div id="razertexto">Lorem ipsum dolor sit amet
         consectetuer adipiscing elit
         sed diam nonummy nibh
         euismod tincidunt ut laoreet
         dolore magna aliquam era.</div>

       <p id="hipersite"><a href="">Visitar Site</a></p>  
   </div> <br>

   <div id="layscaixa">

      <img id="lays" src="img/parcerias/Lays-Logo.png" alt="" width="223"> 

      <h2 id="lays">Lays</h2>

      <div id="laystexto">Lorem ipsum dolor sit amet
         consectetuer adipiscing elit
         sed diam nonummy nibh
         euismod tincidunt ut laoreet
         dolore magna aliquam era.</div>

         <p id="hipersite"><a href="">Visitar Site</a></p>  
   </div>


<div id="paypalcaixa">

   <img id="paypal" src="img/parcerias/pngwing.com (2).png" alt="" width="223"> 

   <h2 id="paypal">PayPal</h2>

   <div id="paypaltexto">Lorem ipsum dolor sit amet
      consectetuer adipiscing elit
      sed diam nonummy nibh
      euismod tincidunt ut laoreet
      dolore magna aliquam era.</div>

    <p id="hipersite"><a href="">Visitar Site</a></p>  
</div>

 
</div>

@yield("footer")

</body>

</html>