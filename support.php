<?php
    $pageTitle = "EnArch Tecnologies | Home";
    include('header.php');
?>
<br />
<br />
<br />
    <h1>Tech Support</h1>
        <p>Please try restarting your laptop <b><i>BEFORE</i></b> you submit a support ticket. If a computer Restart does not fix it, then please by all means submit a ticket.</p>

    <form action="MAILTO:mwilke16@moundsparkacademy.org" method="post" enctype="text/plain">
        Name:<br>
            <input type="text" name="name" value="your name"><br>
        E-mail:<br>
            <input type="text" name="mail" value="your email"><br>
                <div align="center">
                    <select name="OS">
                        <option value="default">----- Choose Your OS -----</option>
                        <option value="xp">Windows XP/Vista</option>
                        <option value="W7">Windows 7</option>
                        <option value="W8">Windows 8</option>
                        <option value="Mac">--------- Mac OS ---------</option>
                        <option value="10.5/6">Mac OS X 10.5/6 Snow/Leopard</option>
                        <option value="10.7">Mac OS X 10.7 Lion</option>
                        <option value="10.8">Mac OS X 10.8 Mountain Lion</option>
                        <option value="10.9">Mac OS X 10.9 Mavericks</option>
                    </select>
                </div>
        Please explain your problem bellow. Please give as much detail as possible:<br>
            <input type="text" name="comment" value="your comment" size="50"><br><br>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
    </form>

<?php
    include('footer.php');
?>
