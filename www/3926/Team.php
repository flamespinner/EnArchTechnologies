<?php 
$headerstuff = NULL;
$pageTitle = "MPA Robotics - The Team";
include('header.php');
?>

<div id="content" class="navDisabled">

<div class="interactive" id="team1">
    <img src="images/MPAror/logoTransparent.svg" class="logo" alt="Logo" style="width: 500px;" />
    <a href="#" onclick="interactiveArrow('team',2,1);"><img src="images/MPAror/arrowwhite.svg" id="team1arrow" alt="Next Slide" style="float: right; width: 200px;" /></a>
</div>
    
<div class="interactive" id="team2" style="height: 1390px; background: url(images/Marketing/team2.png); background-size: 100%;">
    <a href="#" onclick="interactiveArrow('team',3,2);"><img src="images/MPAror/arrowwhite.svg" id="team2arrow" alt="Next Slide" style="margin-top: 540px;margin-left: 779px;width: 90px;" /></a>
</div>
    
<div class="interactive" id="team3" style="height: 1390px; background: url(images/Marketing/team3.png); background-size: 100%;">
    <a href="#" onclick="interactiveArrow('team',1,3);"><img src="images/MPAror/arrowwhite.svg" id="team3arrow" alt="Next Slide" style="margin-top: 540px;margin-left: 779px;width: 90px;" /></a>
</div>

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>