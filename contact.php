<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Contacto</title>

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="icon" href="fotos paste/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- iconos footer -->
  

  <!-- GOOGLE FONTs 
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
-->
</head>

<body>

  <?php require_once("include/header.php") ?>

  <div class="main-text">
    <div class="line1"></div>
    <h1 class="h1-txt">CONTACTO</h1>
    <div class="line2"></div>
  </div>


  <section div class="text-contact">
    <div class="container-contact">
      <h2>CONTÁCTATE CON NOSOTROS</h2>
      <div class="info-links">
        <a href="https://www.instagram.com/disenosabores.posadas/"><i class="fa-solid fa-shop"></i></a>
        <label>¡TE ESPERAMOS DE LUNES A SÁBADOS DE 8 HS A 20 HS!</label>
      </div>
      <div class="info-links">
        <a href="https://www.instagram.com/disenosabores.posadas/"><i class="fa-regular fa-envelope"></i></a>
        <label>DISENODESABORES@GMAIL.COM</label>
      </div>
      <div class="info-links">
        <a href="https://www.instagram.com/disenosabores.posadas/"><i class="fab fa-instagram"></i></a>
        <label>DISENOSABORES.POSADAS</label>
      </div>
      <div class="info-links">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <label>376 - 154508619</label>
      </div>
      <div class="info-links">
        <a href="https://www.facebook.com/Dsabores/"><i class="fab fa-facebook-f"></i></a>
        <label>DISEÑO DE SABORES PASTELERIA</label>
      </div>
    </div>  
    <div class="container-maps">
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3542.501075049317!2d-55.90205982468789!3d-27.391292976365182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9457be564c586045%3A0x374687711580b99d!2sMonteagudo%201969%2C%20Posadas%2C%20Misiones!5e0!3m2!1ses!2sar!4v1718606067035!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
      
    
    
  </section>  


  <div class="form-content">
    <h2>¡Envíe su consulta!</h2>
    <form action="https://formsubmit.co/lopezzsofia19@gmail.com" method="POST" >
      <label form="name">Nombre</label>
      <input type="text" name="name" id="name">
      
      <label form="email">Correo electrónico</label>
      <input type="email" name="email" id="email">

      <label form="subject">Asunto</label>
      <input type="text" name="subject" id="subject">

      <label form="question">Consulta</label>
      <textarea name="question" name="question" id="question" cols="30" rows="5"></textarea>

      <input class="btn" type="submit" value="Enviar">
    
    <!-- Evita el msj de captcha despues de enviar un form -->
      <input type="hidden" name="_next" value="http://localhost/prototipo/contact.php">
    <!-- Evita que nos saque de la pagina -->
      <input type="hidden" name="_captcha" value="false">
    
    </form>
  </div>



  <?php require_once("include/footer.php");?>

</body>

</html>