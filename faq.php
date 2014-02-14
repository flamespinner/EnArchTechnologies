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
                <p>If you are having computer issues, take a look at our FAQ before you email us or take it in. There may be a simple fix to your issue. To view the answer to a question, simply click on it. If the FAQ does not solve your problem please submit the form below</p>
                <p>
                        <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
                    <script>
                     $(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
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
                        #flip2{
                            height:40px;
                            padding:5px;
                            border:1px solid #FFF;
                        }
                        #panel2{
                            display:none;
                            padding:5px;
                            border-bottom:1px solid #FFF;
                            border-left:1px solid #FFF;
                            border-right:1px solid #FFF;
                        }
                    </style>
                    <div id="flip"><h3>My computer is slow. How can I fix this?</h3></div>
<div id="panel"><p>It depends on the source of the problem. You can usually identify the problem depending on what is being slow (downloads, videos, opening applications, games, et cetera). If it has to do with internet, go to <a href="www.speedtest.net">speedtest.net</a> to check your internet connection. If it seems to be a problem with the internet, call your provider and have them check it out. If it is just generally running slowly, check to see<br/><br/></>a) How much free space you have. The less free space on your hard drive, the slower your computer can get.<br/><br/>b) How many processes are running. If you run Mac, you can press Command+Tab to see a list of your open programs, and Command+Q quits them (unlike Windows where you can simply click the X, Mac keeps the program open so you can close and open windows within the program). If you run Windows, you can open the Task Manager by clicking Control+Alt+Delete.<Br/><br/>c) If you have a virus. Get a good anti-virus program to not only remove viruses on the computer, but keep you from getting another one.</p>
</div>
                <div id="flip2"><h3>I keep getting popups. How do I get rid of them?</h3></div>
                <div id="panel2"><p>First, check your browser settings. Some browsers have options that allow you do disable popups (not <i>all</i> popups will be disabled, but most of them should. If you still keep getting the popups (especially when you're not using the internet), you probably have adware installed. Be sure to get a good anti-virus program to remove viruses and adware, and keep your computer running smoothly.</p></div>
                </p>
            </div>
        </div>
    </section>
<Br/><br/>

<hr>
    <!-- Contact Form -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Contact Tech Support</h3>
                <hr>
                <address>
                    <strong>Email:</strong> <a href="mailto:enarchtech@gmail.com"> enarchtech@gmail.com</a><br><br>
                </address>
            </div>
    
            <div class="col-sm-8 contact-form">
                <form id="contact" method="post" class="form" role="form">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                        </div>
                    </div>
                    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                    <br />
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <button class="btn btn-primary pull-right" type="submit">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- End Contact -->



    <?php include('footer.php'); ?>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>