<?php 
session_start();
session_unset();
session_destroy();
setcookie('username', '', 0, '/');
setcookie('nama', '', 0, '/');
header('location:login.php');
?>

<!DOCTYPE html>
<html lang="en">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@700&family=Raleway&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">
  <head>
  
    <title>Logout</title>

  </head>
  <body>
  <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1>Green<span>tips!</span></h1>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="posisi">
        <div class = "profile_username">
            <p> Anda berhasil Logout! </p>
            <br>
            <input type="buttonlogout1" onclick="location.href='login.php';" value="Sign In"/>
            <input type="buttonlogout2" onclick="location.href='register.php';" value="Register"/>
        </div>
    </div>

</body>
</html>