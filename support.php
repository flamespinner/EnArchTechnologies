<?php
    $pageTitle = "EnArch Tecnologies | Home";
    include('header.php');
?>
<br />
<br />
<br />
    <h1>Tech Support</h1>
        <p>Please please Try these first. If the things below do not work feel free to submit a Support Ticket and we shall get back to you</p>
    <table border="2">
        <tr>
            <td><b>Problem</b></td>
            <td><b>Solution</b></td>
        </tr>
        <tr>
            <td>Audio isn't working or is blocked</td>
            <td>Try Restarting your Laptop or Computer</td>
        </tr>
    </table>

    <form action="MAILTO:someone@example.com" method="post" enctype="text/plain">
        Name:<br>
            <input type="text" name="name" value="your name"><br>
        E-mail:<br>
            <input type="text" name="mail" value="your email"><br>
                <div align="center">
                    <select name="mydropdown">
                        <option value="default">----- Choose Your OS -----</option>
                        <option value="xp">Windows XP/Vista</option>
                        <option value="Milk">Windows 7</option>
                        <option value="Cheese">Windows 8</option>
                        <option value="Mac">--------- Mac OS ---------</option>
                        <option value="10.5/6">Mac OS X 10.5/6 Snow/Leopard</option>
                        <option value="10.7">Mac OS X 10.7 Lion</option>
                        <option value="10.8">Mac OS X 10.8 Mountain Lion</option>
                        <option value="10.9">Mac OS X 10.9 Mavericks</option>
                    </select>
                </div>
        Comment:<br>
            <input type="text" name="comment" value="your comment" size="50"><br><br>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
    </form>

<?php
    include('footer.php');
?>
