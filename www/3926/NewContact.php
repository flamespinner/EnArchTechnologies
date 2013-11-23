<?php 
$headerstuff = NULL;
$pageTitle = "MPA Robotics - Contact";
include('header.php');
?>

<div id="content" style="text-align:center;">

<div id="title">

<h1>Contact MPA Robotics</h1>
<hr />
</div>
<br />

<form>
    First Name: <input type="text" name="firstname"><br>
    Last Name: <input type="text" name="lastname"><br>
    Company Name: <input type="text" name"company"><br>
    Email: <input type="text" name="email"><br>
    Phone Number: <input type="text" name="phonenumber"> <br>
    Message: <input type="text" name="message"><br>
        </br>
    <input type="submit" value="Submit">
</form>

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>