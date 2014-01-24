<?php
    $pageTitle = "EnArch Tecnologies | Home";
    include('header_es.php');
?>

<head>
<title>EnArch | Página Principal</title>
    <link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
    
</head>
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Tecnologías EnArch</h1>
              <p>Somos una empresa pequeña en Minnesota, y somos socios de DBZTech. Diseñamos sitios web, hacemos videojuegos, ofrecemos ayuda con computadoras, y tenemos una variedad de productos originales que Usted puede comprar, aquí en nuestro sitio web.<br/><br/></p>
              <p><a class="btn btn-lg btn-primary" href="about.php" role="button">Leer Más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Ayuda con Computadoras</h1>
              <p>¿Usted problemas con su computadora? ¿Usted no sabe que hacer? ¿Usted quiere que hablar con una persona real, y recibir consejo con su problema exacta? Pues, podríamos que ayudar con esta.<br /><br /></p>
              <p><a class="btn btn-lg btn-primary" href="support.php" role="button">Aprender Más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Creación de los videojuegos</h1>
              <p>En EnArch, queremos que crear videojuegos nuevos de estilos varios en muchas sistemas, como Xbox, PS3, Windows, Mac, y videojuegos de varias sistemas en emuladores.<br /><br /></p>
              <p><a class="btn btn-lg btn-primary" href="gamedev.php" role="button">Navegar Galería</a></p>
            </div>
          </div>
        </div>
        
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Productos Originales</h1>
              <p>Tenemos algunos productos que diseñamos, como auriculares, una sistema de los videojuegos, y más! Vaya a nuestra página de "comprar" para verlos!<br/><br/>
                </p>
              <p><a class="btn btn-lg btn-primary" href="store.php" role="button">Visitar la Tienda</a></p>
            </div>
          </div>
        </div>
          
          <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Diseñar de Sitios Web</h1>
              <p>Nuestros creadores de sitios web están emocionados, porque queremos que tu sueño se haga una realidad.<br/><br/></p>
              <p><a class="btn btn-lg btn-primary" href="webdesign.php" role="button">Aprender Más</a></p>
            </div>
          </div>
        </div>
          
          </div>
        <div id="gradient">
<br /><br />
</div>
        
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
<?php
    include('footer_es.php');
?>