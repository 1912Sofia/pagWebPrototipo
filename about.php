<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="./src/output.css" rel="stylesheet">


  <link rel="icon" href="fotos paste/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- iconos footer -->
  
  <title>Nosotros</title>
  
</head>

<body>

  <?php require_once("include/header.php") ?>

  <div class="main-text">
    <div class="line1"></div>
    <h1 class="h1-txt">NOSOTROS</h1>
    <div class="line2"></div>
  </div>
    
  <div class="description">
    <p>Con cinco años de experiencia, nuestra pastelería es un oasis para los amantes de los dulces. Desde deliciosos pasteles hasta tentadores postres, cada producto es una obra maestra de sabor artesanal. Nuestro ambiente acogedor invita a todos a disfrutar de momentos de indulgencia y placer. 
    ¡Ven y déjate seducir por nuestra dulce oferta!</p>
  </div>



  <section class="slider">
    <div class="container-slider">
      <div class="item-slider" id="item-slider-1">
          <div class="item-slider-container">
            <img src="fotos paste/empleados.jpg" alt="" style="height: 100%; width: 100%; margin-left: 2px;">
          </div>
          <div class="arrows">
              <a href="#item-slider-3">
                <i class="fas fa-chevron-left"></i>
              </a>
              <a href="#item-slider-2">
                <i class="fas fa-chevron-right"></i>
              </a>
          </div>
      </div>
      <div class="item-slider" id="item-slider-2">
        <div class="item-slider-container">
          <img src="fotos paste/rosca.jpg" alt="" style="height: 100%; width: 100%; margin-left: 2px;">
        </div>
        <div class="arrows">
          <a href="#item-slider-1">
            <i class="fas fa-chevron-left"></i>
          </a>
          <a href="#item-slider-3">
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>
      </div>
      <div class="item-slider" id="item-slider-3">
        <div class="item-slider-container">
          <img src="fotos paste/evento.jpg" alt="" style="height: 100%; width: 100%; margin-left: 2px;">
        </div>
          <div class="arrows">
            <a href="#item-slider-2">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a href="#item-slider-1">
              <i class="fas fa-chevron-right"></i>
            </a>
              </div>
            </div>
        </div>
    </div>




    <section class="info-events">
      <div class="container">
        <section class="about">
          <div class="about-image">
            <img src="fotos paste/brownie.jpg" alt="">
          </div>
          <div class="about-content">
            <h2>Exquisitez en cada mesa</h2>
            <p>Desde delicias saladas hasta exquisitos postres, nuestro servicio de catering ofrece un viaje culinario que deleita a todos los paladares. Disfruta de una variedad de sabores con nuestros bocados salados artesanales, ideales para cócteles o platos principales. Combínalos con nuestra selección exquisita de dulces, elaborados meticulosamente para satisfacer cada antojo. Ya sea que estés organizando un evento corporativo o celebrando una ocasión especial, nuestro menú diverso garantiza que haya algo para todos. Eleva tu reunión con nuestro servicio profesional y atención al detalle, prometiendo una experiencia culinaria memorable que dejará una impresión duradera.</p>
          </div>
        </section>
      </div>
    </section>
<!--
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
        </div>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <article class="flex max-w-xl flex-col items-start justify-between">
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Boost your conversion rate
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Michael Foster
                  </a>
                </p>
                <p class="text-gray-600">Co-Founder / CTO</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
-->
    <section class="horario">
      <div class="horario-info-container">
        <h2>Horario</h2>
        <div class="horario-txt">
          <div class="txt">
            <h4>NOS UBICAMOS EN</h4>
            <p> Av. Monteagudo N° 1969 </p>
            <p> Posadas, Misiones</p>
          </div>
          <div class="txt">
            <h4>HORARIO</h4>
            <p> Lunes a sábados de 8 hs a 20 hs </p>
          </div>
          <div class="txt">
            <h4>TELÉFONO</h4>
            <p> numero de telefono </p>
          </div>
          <div class="txt">
            <h4>REDES SOCIALES</h4>
            <div class="links">
              <a href="#"><i class="fab fa-whatsapp"></i></a> <!-- wpp -->
              <a href="#https://www.instagram.com/disenosabores.posadas/"><i class="fab fa-instagram"></i></a>
              <a href="#https://www.facebook.com/Dsabores/"><i class="fab fa-facebook-f"></i></a>
            </div>
              
          </div>
        </div>
      </div>
    </section>
        

  <?php require_once("include/footer.php");?>

</body>

</html>