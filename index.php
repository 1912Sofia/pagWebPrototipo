<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="./output.css" rel="stylesheet">


  <link rel="icon" href="fotos paste/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- iconos footer -->
  
</head>

<body>

  <?php require_once("include/header.php") ?>

  <main>
    <div class="slider-box">
      <ul>
        <li>
          <img src="fotos paste/rosca.jpg" alt="">
        </li>
        <li>
          <img src="fotos paste/postre.jpg" alt="">
        </li>
        <li>
          <img src="fotos paste/tarteletafrutossecos.jpg" alt="">
        </li>
        <li>
          <img src="fotos paste/presentacion.jpg" alt="">
        </li>
        <li>
          <img src="fotos paste/postre2.jpg" alt="">
        </li>
      </ul>
    </div>
    <div class="texto">
      <h1>Diseño de Sabores</h1>
      <h2>Pastelería</h2>
      <h4>¡Haz tus momentos especiales aún más dulces!</h4>
    </div>
    
    <div id="section-inicio1">
      <div class="item-carrusel" id="item-carrusel-1">
        <div class="carrusel" id="carrusel-1">
          <!-- <div class="contenido-section-inicio1" style="height: auto"> -->
        
            <div class="contenedor-section-inicio1" id="contenedor-section-inicio1-1">
              <img src="fotos paste/evento.jpg" alt="" style="height: 500px; width: 400px; margin-left: 2px;">
              
              <p style="text-align: right; color: #F4F1BB; position: right; justify-content: center; font-size: 100%;">Delicias dulces y saladas para eventos inolvidables. 
              ¡Haz que tu ocasión sea única con nuestro servicio de catering!</p>
              
            </div>
    
          </div>

        <div class="flechas-carrusel">
          <a href="#item-carrusel-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
          </a>
          <a href="#item-carrusel-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </a>
          
        </div>

      </div>
      
      <div class="item-carrusel" id="item-carrusel-2">
        <div class="carrusel" id="carrusel-2">
          <div class="contenedor-section-inicio1" id="contenedor-section-inicio1-2">
            <img src="fotos paste/evento.jpg" alt="" style="height: 500px; width: 400px; margin-left: 2px;">

            <p>Desde los románticos días de San Valentín hasta las festivas celebraciones de Navidad. En cada fecha especial, déjate tentar por nuestros irresistibles postres.</p>
          </div>

        </div>

        <div class="flechas-carrusel">
          <a href="#item-carrusel-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
          </a>
          <a href="#item-carrusel-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </a>
        </div>
      </div>

      <div class="item-carrusel" id="item-carrusel-3">
        <div class="carrusel" id="carrusel-3">          
          <div class="contenedor-section-inicio1" id="contenedor-section-inicio1-3">
            <img src="fotos paste/evento.jpg" alt="" style="height: 500px; width: 400px; margin-left: 2px;" class="section">

            <p style="text-align: right; color: #F4F1BB; position: right; justify-content: center; font-size: 100%;">Delicias dulces y saladas para eventos inolvidables. 
              descripcion 3</p>
          </div>

        </div>

        <div class="flechas-carrusel">
          <a href="#item-carrusel-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
          </a>
          <a href="#item-carrusel-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </a>
            
        </div>
      </div>
      
    
    </div>
    
    <!--
      <div class="contenido-section-inicio1" style="height: auto">
        <img src="fotos paste/rosca.jpg" alt="">

        <div class="contenedor-section-inicio1">
          <img src="fotos paste/evento.jpg" alt="">
          
          <p class="Parrafo" style="text-align: right; color: #F4F1BB; position: right;"><span style="font-size: 100%;">Delicias dulces y saladas para eventos inolvidables. 
          ¡Haz que tu ocasión sea única con nuestro servicio de catering!</p>
          
        </div>

      </div> 
    -->
    </div>

  
        
  </main>

  
  </div>


<!-- antes del () include?? --> 
    <?php 
       require_once("include/footer.php");
    ?>

</body>

</html>

