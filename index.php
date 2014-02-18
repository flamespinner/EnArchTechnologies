<?php
require_once('class.translation.php');

if(isset($_GET['lang']))
	$translate = new Translator($_GET['lang']);
else
	$translate = new Translator('en');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Riley Lannon & Michael Wilke">

    <title><?php $translate->__('EnArch | Home'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <script>
    
        $(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});
    
    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light"><?php $translate->__('EnArch'); ?></span> <?php $translate->__('Home'); ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><?php $translate->__('About'); ?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#design"><?php $translate->__('Web Design'); ?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#support"><?php $translate->__('Tech Support'); ?></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#dev"><?php $translate->__('Software'); ?></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#store"><?php $translate->__('Store'); ?></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#contact"><?php $translate->__('Contact'); ?></a>
                    </li>
                    
                    <li class="dropdown">
                     <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown"><?php $translate->__('More'); ?> <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="Summer@MPA/index.html"><?php $translate->__('Classes'); ?></a></li>
                         <li><a href="store.php">Store</a></li>
                         
                        <li class="divider"></li>
                        <li><a href="index.php?lang=en"><img src="img/us.png"></img>   English</a></li>
                        <li class="divider"></li>
                        <li><a href="index.php?lang=es"><img src="img/es.jpg"></img>   Español</a></li>
                     </ul>
                  </li>
                    
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php $translate->__('EnArch Technologies'); ?></h1>
                        <p class="intro-text"><?php $translate->__('Technology Made Simple. Technology The Way You Want It.'); ?></p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php $translate->__('About EnArch'); ?></h2>
                <p><?php $translate->__('EnArch is a small technology company based out of Minnesota, USA, in partnership with'); ?> <a href="http://www.dbztech.com">DBZTech</a>.</p>
                <p><?php $translate->__('We do web design, game and software development, and have a variety of original products you can purchase —— right here on our website.'); ?></p>
                <p><?php $translate->__('Although we only have a handful of "employees", we have a lot in the works and we are very dedicated to what we do. Our goal is to make technology simple, understandable, and enjoyed by all people.'); ?></p>
            </div>
        </div>
    </section>

    <section id="design" class="content-section text-center">
        <div class="web-design">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2><?php $translate->__('Web Development'); ?></h2>
                    <p><?php $translate->__('We are excited to make your dream become reality. With talented web developers experienced in HTML, CSS, PHP, and JavaScript, we are ready to take on whatever challenge you throw at us. We have low rates and are happy to make your site exactly as you want it. Once you hire us to design your website, we will update it for free whenever you want and will make sure the site gets hosted.'); ?></p>
                    <a href="webdesign.php" class="btn btn-default btn-lg"><?php $translate->__('Learn More'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="support" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php $translate->__('Tech Support'); ?></h2>
                <p><?php $translate->__('Have a computer problem? Don\'t know what to do? It\'s okay —— you\'ve got us!'); ?></p>
                <p><?php $translate->__('If you are having a technical issue, restarting your computer may fix the problem. For example, if you have an internet connection issue, you can try turning off your WiFi or router or closing your browser. If the computer simply isn\'t working, try restarting it.'); ?></p>
                <p><?php $translate->__('If a restart doesn\'t fix it,'); ?><a href="faq.php"> <?php $translate->__('take a look at our'); ?> FAQ</a>. <?php $translate->__('If your problem isn\'t listed there, we will be happy to take a look.'); ?></p>
            </div>
        </div>
    </section>
    
    <section id="dev" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php $translate->__('Game and Software Development'); ?></h2>
                <p><?php $translate->__('Here at EnArch, we take enjoyment in designing games and software. We have people ready to design using C++, TES/CS, and CryEngine.'); ?></p>
                <p><?php $translate->__('We are also currently designing a computer operating system, a simple game console, writing tutorials, and various other games and products. More information will be posted on this website later.'); ?></p>
                <a href="dev.php" class="btn btn-default btn-lg"><?php $translate->__('View Games and Software'); ?></a>
            </div>
        </div>
    </section>

    <section id="store" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php $translate->__('Store'); ?></h2>
                <p><?php $translate->__('We have a variety of products available for purchase, here on our site. We use PayPal to place our orders, but you don\'t need a PayPal account to buy products from us! Visit our store for more information.'); ?></p>
                <a href="store.php" class="btn btn-default btn-lg"><?php $translate->__('Visit the Store'); ?></a>
            </div>
        </div>
    </section>
    
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php $translate->__('Contact Us'); ?></h2>
                <p><?php $translate->__('Feel free to contact us for feedback, questions, or business inquiries at:'); ?></p>
                <p>enarchtech@gmail.com</p>
            </div>
        </div>
    </section>

     <?php include('footer.php'); ?>
    
    <div id="map"></div>

    <!-- Core JavaScript Files NEEDS TO STAY - FANCY SLIDE EFFECTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
