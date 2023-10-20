<?php 
    session_start();
    if(count($_SESSION)>2){
        $_SESSION['have_id']="true";
    }
    else
    {
        $_SESSION['have_id']="false";

    }
?>

<html>
    <head>
        <title></title>
    </head>

    <body>
        
        <form method="GET" action="loginCheck.php" enctype="">
            <table border='1'>
               <tr><td rowspan="6"><img align="center" src="Public_image.png" width="75" height="70"/> <br>  PUBLIC USER</td></tr>
               <tr><td>               <input type="submit" name="Public_Home" value="Public Home"/></td></tr>
               <tr><td>               <input type="submit" name="Registration" value="Registration"/></td></tr>
               <tr><td>               <input type="submit" name="Log_in" value="Log in"/></td></tr>
               <tr><td>               <input type="submit" name="Forget_Password" value="Forget Password"/></td></tr>

            </table>
            
        </form>
       
    </body>
</html>