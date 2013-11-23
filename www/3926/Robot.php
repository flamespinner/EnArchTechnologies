<?php 
$headerstuff = NULL;
$pageTitle = "MPA Robotics - The Robot";
include('header.php');
?>

<div id="content" style="height: 600px; padding: 0px;">

    <div class="selectbar">
        <p>Select a year:</p>
        <p><a href="#" onClick="document.getElementById('2013').style.display = 'none'; document.getElementById('2012').style.display = 'block';">2012</a> | <a href="#" onClick="document.getElementById('2012').style.display = 'none'; document.getElementById('2013').style.display = 'block';">2013</a></p>
    </div>
    
    <div id="2012">
        <div class="robotImage" style="background: url(images/Robot/ComingSoon.svg);">
            <!--
            <div class="node" onclick="document.getElementById('2012content').innerHTML = 'Slide 1';"></div>
            <div class="node" onclick="document.getElementById('2012content').innerHTML = 'Slide 2';"></div>
            -->
        </div>
        
        <div class="robotContent">
            <div class="contentStatic">
                <h1>Rebound Rumble</h1>
                <h2>Coming Soon!</h2>
                <p id="2012content">Coming Soon!</p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    
    <div id="2013" style="display: none;">
        <div class="robotImage" style="background: url(images/Robot/ComingSoon.svg);">
            <!--<div class="node"></div>-->
        </div>
        
        <div class="robotContent">
            <div class="contentStatic">
                <h1>Ultimate Ascent</h1>
                <h2>Classified</h2>
                <p id="2013content">Classified</p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    
    <div id="2014" style="display: none;">
        <div class="robotImage" style="background: url(images/Robot/ComingSoon.svg);">
            <!--<div class="node"></div>-->
        </div>
        
        <div class="robotContent">
            <div class="contentStatic">
                <h1>Unknown</h1>
                <h2>Classified</h2>
                <p id="2014content">Classified</p>
            </div>
            
            <div class="contentStub">
            </div>
        </div>
    </div>
    
</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>