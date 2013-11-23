<?php
    $pageTitle = "EnArch Tecnologies | Home";
    include('header.php');
?>

<head>
<title>EnArch | Home</title>
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
              <h1>EnArch Tecnologies</h1>
              <p>We are a small technology company based out of Minnesota in partnership with DBZTech. We do Web Design, Game Development, Tech Support, and have a variety of original products you can purchase, right here on our website.<br/><br/></p>
              <p><a class="btn btn-lg btn-primary" href="about.php" role="button">See More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Tech Support</h1>
              <p>Having computer troubles? Don't know what to do? Want to talk to an actual person and get advice for your exact problem? Well, we may be able to help out with that.<br /><br /></p>
              <p><a class="btn btn-lg btn-primary" href="support.php" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Game Development</h1>
              <p>At EnArch, we hope to create new games of various styles for many systems, including Xbox, PS3, Windows, Mac, and games for various systems on emulators.<br /><br /></p>
              <p><a class="btn btn-lg btn-primary" href="gamedev.php" role="button">Browse Gallery</a></p>
            </div>
          </div>
        </div>
        
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Original Products</h1>
              <p>We have a number of products we designed including
                headphones, a gaming system, and more! Check out our
                  "shop" page to see them!<br/><br/>
                </p>
              <p><a class="btn btn-lg btn-primary" href="store.php" role="button">Visit Store</a></p>
            </div>
          </div>
        </div>
          
          <div class="item">
          
          <div class="container">
            <div class="carousel-caption">
              <h1>Web Design</h1>
              <p>The Web Developers at EnArch are excited to make your dream for your personal or company website become a reality.<br/><br/></p>
              <p><a class="btn btn-lg btn-primary" href="webdesign.php" role="button">Learn More</a></p>
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
    include('footer.php');
?>