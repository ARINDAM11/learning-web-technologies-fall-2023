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

        <form method="POST" action="LoggedinCheck.php" enctype="">
        <table border="1">
<tr>
    <td style="width: 350px">
    <img align="left" src="X_company.jpg" width="40" height="40"/>
     Company
     <div style="float: right;">
        <a href="Logged_in_user.php" style="font-size: 15px">Home</a>|
        <a href="logout.php"  style="font-size: 15px">Logout</a>|
        <a href="Registration.php" style="font-size: 15px">Registration</a>
     </div>    </td>
</tr>
<tr><td align="center" style="height:150">
            <fieldset style="width:250px">
                <legend>CHANGE PASSWORD</legend>
                <table>
                    <tr>
                        <td>
                <table>
                <tr><td> Current</td><td style="width:150px"> PASSWORD: </td><td><input type="PASSWORD" name="PASSWORD" value=""/></td></tr>
               </table>
               <table>
                <tr><td style="width:150px"> NEW PASSWORD: </td><td><input type="PASSWORD" name="NEW_PASSWORD" value=""/></td></tr>
               </table>
               <table>
                <tr><td style="width:150px">Retype</td><td> New</td> <td>PASSWORD: </td><td><input type="PASSWORD" name="retype_NEW_PASSWORD" value=""/></td></tr>
               </table>
               <table>
                <hr>
               <tr><td><input type="SUBMIT" name="SUBMIT_CHANGE_PASSWORD" value="SUBMIT"/></td><td> </td></tr>
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