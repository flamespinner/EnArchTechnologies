<script>
    
        $(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});
    
    </script>

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
                        <a href="store.php">Store</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="contact.php">Contact</a>
                    </li>
                    
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="Summer@MPA/index.html">Classes</a></li>
                         <li><a href="#">Blog</a></li>
                         
                        <li class="divider"></li>
                        <li><a href="index.php?lang=en"><img src="img/us.png"></img>   English</a></li>
                        <li class="divider"></li>
                        <li><a href="index.php?lang=es"><img src="img/es.jpg"></img>   Español</a></li>
                     </ul>
                  </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>