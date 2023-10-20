<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {
?>

<html>
    <head>
        <title>VIEW PROFILE</title>
    </head>

    <body>

        <form method="POST" action="LoggedinCheck.php" enctype="">
        <table border="1">
<tr>
    <td style="width: 250px">
    <img align="left" src="X_company.jpg" width="25" height="25"/>
     Company
     <div style="float: right;">
     Loggedin as <a href="View_profile.php" style="font-size: 10px"><?php echo $_SESSION['username']?></a>|
        <a href="logout.php" style="font-size: 10px">Logout</a>
     </div>    </td>
</tr>
<tr><td align="left" style="height:150">
           
                <table>
                    <tr>
                        <td>
                <tr><td> Account <hr></td></tr>
                <tr><td>
                <a href="Dashboard.php">DASHBOARD</a><br>
                <a href="View_profile.php">VIEW PROFILE</a><br>
                <a href="edit_profile.php">EDIT PROFILE</a><br>

                <a href="change_profile.php">Change Profile Picture</a><br>
                <a href="change_pass.php">CHANGE PASSWORD</a><br>
                <a href="logout.php">LOG OUT</a></td></tr>
</td>
               </tr>
                </table>

            </td>
            <td>
                <table>
                    <tr>
                        <td>
                        <table>
                        <tr>
                    <td>
                <fieldset><legend>Profile</legend>

<table>
    <tr>
        <td>
      
                    <table>

    <tr><td style ="width: 150px">Name</td><td> :<?php echo $_SESSION['Name'];?>
    </td></tr>
    </table>
<table>
    
<hr>

    <tr height="25"><td style ="width: 150px">Email</td><td> :<?php echo $_SESSION['email'];?></td></tr>
    </table>
    <table>
        <hr>

    <tr>
        <td>
        <tr height="25"><td style ="width: 150px">Gender</td><td> :<?php echo $_SESSION['gender'];?></td></tr>

    </td>
</tr>
    </table>
    <table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px">Date of Birth</td><td> :<?php echo $_SESSION['date'];?></td></tr>

        </tr>
        </table>

        </td>
        <td>   <table> <tr><td align="right"><img align="right" src="<?php echo $_SESSION['image']?>" width="75" height="75"/> <br>  <a href="change_profile.php" align="left">Change</a></td></tr>
</table></td>
    </tr>
</table>
        </fieldset>
        </td>
                </tr>

                        </td>
                    </tr>
                </table>
</td>
</tr>

</table>  
<tr><td align="center">
    Copyright 2017
</td></tr></table>

</form>  

    </body>
</html>
<?php
}
?>
