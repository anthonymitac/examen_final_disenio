 <?php
session_start();
 ?>
 <!doctype html>
  
    <html lang="es">

   <head>
  <meta charset="iso-8859-1">
  <meta name="descripcion" content=" Aplicacion web">
     <meta name="contenido" content="codigo basico html5">
       <title>ELECCION EN EL SALVADOR </title>
    
         <meta charset="iso-8859-1">
       <meta name="Descripcion" content="multimplicacion">

     <link type="text/css" rel="stylesheet" href="css/estiloPresindente.css">
       <link rel="stylesheet" href="css/normalize.css">



         <meta charset="iso-8859-1">
       <meta name="Descripcion" content="multimedia">
     <meta name="Contenido" content="Aplicacion">
      <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript">
    function retroceder(){
      window.location.hash="no-back-button";
      window.location.hash="Again-No-back-button";
      window.onhashchange=function(){window.location.hash="no-back-button";}
    }
    </script>
  
</head>

 <body onload='retroceder();'>

<div id= "titulo2">

<header>


  <h1>PAPELETA DE ELECION DE  CONSEJOS MUNICIPALES</h1>
  <h2></h2>
</div>
  </header>
  
 <div class="nosee">
        <form action="voto.php" method="post" id="presidente">
            <table class="table-bordered">
           
         <table class="table-bordered">
         
<div id="textoPr">
    <div id="imagen1">
     <figure>
<a href="votacion.php?dui=<?php echo $_SESSION['dui']; ?>&partido=1">  <img src="partidos/bandera1.png" ></img></a>
  </figure>
  </div>

   <div id="imagen2">
     <figure>
   <a href="votacion.php?dui=<?php echo $_SESSION['dui']; ?>&partido=2"> <img src="partidos/bandera 2.png" ></img></a>
  </figure>
  </div>

    <div id="imagen3">
     <figure>
  <a href="votacion.php?dui=<?php echo $_SESSION['dui']; ?>&partido=3"> <img src="partidos/bandera4.png"></img></a>
  </figure>
  </div>
  
 <br> <div id="imagen4">
     <figure>
   <a href="votacion.php?dui=<?php echo $_SESSION['dui']; ?>&partido=4"><img src="partidos/bandera5.png"></img></a>
  </figure>
  </div></br>
  

  <div id="imagen5">
     <figure>
  <a href="votacion.php?dui=<?php echo $_SESSION['dui']; ?>&partido=5"> <img src="partidos/bandera7.png" ></img></a>
  </figure>
  </div>


  <div id="imagen6">
     <figure>
  <a href="votacion.php?dui=<?php echo $_SESSION['dui']; ?>&partido=6"> <img src="partidos/imagen8.jpg" ></img></a>
  </figure>
  </div>




</from>
 <?php
      print '<a href=\'VOTO.PHP\'>SIGUIENTE PAGINA</a>';
?>
</table>
    </div>

 </html>
 