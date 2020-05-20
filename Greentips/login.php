<?php 

session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:home.php');
}

if(isset($_COOKIE['username']))
{
  $database = relogin($_COOKIE['username']); 
  header('location:home.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database = login($username,$password,$remember))
    {
      header('location:home.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@700&family=Raleway&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">
  <head>
  
    <title>Login Form</title>

  </head>
  <body>
  <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1>Green<span>tips!</span></h1>
                </div>
            </div>
        </div>

    <form method="post" class = "posisi" action="">
      <br>
      <div class="profile_username">
        <p><b>Sign In</b></p>
    </div>
    <br>
    <br>

  <div class="profile_atribut_container">
    <div class="profile_atribut">
      <label class = "profile_atribut_judul" for="username" >Username</label>
      <br>
      <input type="text" id="username"  placeholder="Username" name="username" required autofocus>
      <br>

      <label  class = "profile_atribut_judul" for="password" >Password</label> <br>
      <input type="password" id="password"  placeholder="Password" name="password" required>
      <br>
      <div>
        <label>
          <input type="checkbox" value="remember-me" name="remember"> Remember me
        </label>
        <br>
        <br>
      </div>
      <button type="submit" name="login">Sign in</button>
      <br>
      <br>

      <p>Don't have an account?</p>
        <a class = "register " href="register.php">Register</a>
    </div>
  </div>
</form>
</body>
</html>