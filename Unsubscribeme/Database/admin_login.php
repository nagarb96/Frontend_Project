<?php
include('../Database Connection file/database.inc.php');
?>


<html>
<head>
<title>Login</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="mycss.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>ADMIN LOGIN PAGE</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username" name="AdminName">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="AdminPassword">
        </div>
        
        <button type="submit" name="Signin">Sign In</button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
            <!--<a href="#">Create an Account</a>-->
        </div>

    </form>
</div>
    <?php 

if(isset($_POST['Signin']))
{
    $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location: all_database.php");    
    }
    else
    {
        echo"<script>alert('Incorrect');</script>";
    }
}

?>
</body>
</html>