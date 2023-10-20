<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {
?>

<html>
    <head>
        <title>LOG IN</title>
    </head>

    <body>

        <form method="POST" action="loginCheck.php" enctype="">
        <table border="1">
<tr>
    <td style="width: 350px">
    <img align="left" src="X_company.jpg" width="40" height="40"/>
     Company
     <div style="float: right;">
        <a href="public_user.php" style="font-size: 15px">Home</a>|
        <a href="Login.php"  style="font-size: 10px">Login</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>
     </div>    </td>
</tr>
<tr><td align="center" style="height:150">
            <fieldset style="width:250px">
                <legend>FORGOT PASSWORD</legend>
                <table>
                    <tr>
                        <td>
<table>
                <tr><td> Enter Email: </td><td><input type="EMAIL" name="forget_email" value=""/></td></tr>
               </table>
               <table>
                <hr>
               <tr><td><input type="SUBMIT" name="FORGET" value="SUBMIT"/></td><td> </td></tr>
               </table>
</td>
               </tr>
                </table>

            </fieldset>
            </td></tr>
<tr><td align="center">
    Copyright 2017
</td></tr>
</table>  
</form>  


    </body>
</html>
<?php
}
?>