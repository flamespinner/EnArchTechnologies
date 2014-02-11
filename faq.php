<!DOCTYPE html>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Riley Lannon & Michael Wilke">

    <title>EnArch | FAQ</title>
    <script src="jquery.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">EnArch</span> Home
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="index.php#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="webdesign.php">Web Design</a>
                    </li>
                    <li class="page-scroll">
                        <a href="faq.php">Tech Support</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="dev.php">Software</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="contact.php">Contact</a>
                    </li>
                    
                    <li>
                    <a href="Summer@MPA/index.html">Classes</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Frequently Asked Questions</h1>
                <p>If you are having computer issues, take a look at our FAQ before you email us or take it in. There may be a simple fix to your issue. To view the answer to a question, simply click on it.</p>
                <p>
                        <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
                    <style type="text/css">
                        #flip{
                            height:40px;
                            padding:5px;
                            border:1px solid #FFF;
                        }
                        #panel{
                            display:none;
                            padding:5px;
                            border-bottom:1px solid #FFF;
                            border-left:1px solid #FFF;
                            border-right:1px solid #FFF;
                        }
                    </style>
                    <div id="flip"><h3>Question</h3></div>
<div id="panel"><p>Answer </p>
</div>
                </p>
            </div>
        </div>
    </section>
<Br/><br/>

    <?php include('footer.php'); ?>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>