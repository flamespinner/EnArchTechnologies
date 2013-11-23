<?php 
$headerstuff = NULL;
$pageTitle = "MPA Robotics - Contact";
include('header.php');
?>

<div id="content">
    <div id="formWrap">

<h1 align="Center">Contact MPA Robotics</h1>
<hr />
</div>
<br />


<div style="margin:auto;background:#2166bf;opacity:50%;border-radius:15px;padding-left:10px;border:1px solid black;color:white;width:500px;">


<?php if ($_POST[name] == NULL) {
echo('
<form action="../Contact" name="contact" method="post">
<div>
     </br>
     * Name:&nbsp;<input type="text" name="name" required="required" />
</div>
     
<div>
     Company Name:&nbsp;<input type="text" name="company" /> *if representing a company
</div>
     
<div>
     * Phone Number:&nbsp;<input type="text" name="company" required="required" />
</div>


<div>
     * Email:&nbsp;<input type="email" name="email" required="required" />
</div>

</br>
     
<div>
     * Message:<br /><textarea name="message" required="required" rows="10" cols="60" required="required"></textarea>
</div>
     
<div>
<input type="submit" value="Submit" />
</div>
</form>
<br />
      </div>
     </br>
<hr style="width:98%;" />
<br />
     
   
     
<div style="margin:auto;background:#2166bf;opacity:50%;border-radius:10px;padding:10px;border:2px solid black;color:white;width:400px;">
Address:<br />
Mounds Park Academy <br />
2051 Larpenteur Ave. E. <br />
Saint Paul, MN 55109 <br />
<br />
Phone: 651-777-2555
</br>
Email: robotics@moundsparkacademy.org
<br />
</div>
<br />');
}
else {
     if (mail('colson13@moundsparkacademy.org','MPA Robotics mail from '.$_POST[name],wordwrap($_POST[message], 70),'From: '.$_POST[email])) {
        echo('<p style="color:white;">Your message has been sent.</p></div>');
     } else {
        echo('<p>Nope..... totally broken</p></div>');
     }
}
?>

</div>
</br>

<?php
    $footerstuff = NULL;
    include('footer.php');
?>