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

    <?php include('head.php'); ?>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Frequently Asked Questions</h1>
                <p>If you are having computer issues, take a look at our FAQ before you email us or take it in. There may be a simple fix to your issue. To view the answer to a question, simply click on it. If the FAQ does not solve your problem please submit the form below.</p>
                
                        <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
    $("#panel2").slideUp("slow");
    $("#panel3").slideUp("slow");
  });
});
</script>
                    <script>
                     $(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
    $("#panel").slideUp("slow");
    $("panel3").slideUp("slow");
  });
});
                    </script>
                    
                    <script>
                     $(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
    $("#panel").slideUp("slow");
    $("panel2").slideUp("slow");
  });
});
                    </script>
                    
                    <style type="text/css">
                        #flip{
                            height:40px;
                            padding:5px;
                            /*border:1px solid #FFF;*/
                        }
                        #panel{
                            display:none;
                            padding:5px;
                            /*border-bottom:1px solid #FFF;
                            border-left:1px solid #FFF;
                            border-right:1px solid #FFF;*/
                        }
                        #flip2{
                            height:40px;
                            padding:5px;
                            /*border:1px solid #FFF;*/
                        }
                        #panel2{
                            display:none;
                            padding:5px;
                           /* border-bottom:1px solid #FFF;
                            border-left:1px solid #FFF;
                            border-right:1px solid #FFF;*/
                        }
                         #flip3{
                            height:40px;
                            padding:5px;
                            /*border:1px solid #FFF;*/
                        }
                        #panel3{
                            display:none;
                            padding:5px;
                           /* border-bottom:1px solid #FFF;
                            border-left:1px solid #FFF;
                            border-right:1px solid #FFF;*/
                        }
                    </style>
                    <div id="flip"><h3>My computer is slow. How can I fix this?</h3></div>
<div id="panel"><p>It depends on the source of the problem. You can usually identify the problem depending on what is delayed (downloads, videos, opening applications, games, etc.). If the problem seems to be related to the internet, go to <a href="www.speedtest.net">speedtest.net</a> to check your internet connection. If the connection is low, call your provider and have them check it out. On the otherhand, if your computer is just generally running slowly, check to see:<br/><br/></>a) How much free space you have. The less free space on your hard drive, the slower your computer will get.<br/><br/>b) How many programs are running. If you run Mac, you can press Command+Tab to see a list of your open programs, and use Command+Q to quit them (unlike Windows where you can simply click the X, Mac keeps the program open so you can close and open windows within the program). If you run Windows, you can open the Task Manager by clicking Control+Alt+Delete.<Br/><br/>c) If you have a virus. Get a good anti-virus program to not only find and remove viruses on the computer, but keep you from getting more.</p>
</div>
                <li class="divider"></li>
                <div id="flip2"><h3>I keep getting popups. How do I get rid of them?</h3></div>
                <div id="panel2"><p>First, check your browser settings. Some browsers have options that allow you do disable popups (not <i>all</i> popups will be disabled, but most of them should be). If you still keep getting the popups —— especially when you're not using the internet —— you probably have adware, a program that puts popups on your computer, installed. Be sure to get a good anti-virus program to remove viruses and adware so that your computer will keep running smoothly.</p>
                </div>
                <li class="divider"></li>
                <div id="flip3"><h3>My Battery Doesn't Hold As Much Charge As It Used To. Why Is This?</h3></div>
                <div id="panel3"><p><br/></b>The batteries found in phones or laptops, called lithium-ion batteries, will gradually lose their maximum charge over time. There isn't much you can do to improve your battery life, but sometimes your battery may not display the correct charge. To change this, you can "recalibrate" your battery (this is different for every device, so a simple google search will yield the result you want). Batteries lose charge even if they aren't in use, and a battery that has not held any charge for a long enough time will end up losing its ability to recharge.</p>
                </div>
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