<?php
require_once('class.translation.php');

if(isset($_GET['lang']))
	$translate = new Translator($_GET['lang']);
else
	$translate = new Translator('en');
?>
<!--^^Here in case we add "Translatable" content later-->
<link rel="stylesheet" type="text/css" href="css/grayscale.css">
<section id="foot" class="banner-social-buttons text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
    <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/enarchtech" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/flamespinner/EnArchTechnologies" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            <br/><br/>
            <div id="foot">
            <p>Copyright 2014 EnArch Technologies</p>
            </div>
            </div>
        </div>
    </section>
<br/><br/>