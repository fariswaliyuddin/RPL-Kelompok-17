<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST['email'];
    if($database = register($username,$password,$email))
    {
      header('location:login.php');
    }
}

?>
<!doctype html>
<html lang="en" class="h-100">
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@700&family=Raleway&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">
  <head>

    <title>Register Form</title>

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
<main>
  <div class = "posisi">
    <h1 class="profile_username">Register</h1>
    <br>

    <br>

    <form method="post" action="" class = "profile_atribut_container">
    <div class="form-group row">
      <label for="username" class="profile_atribut_judul">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="profile_atribut_judul">E-mail</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
      </div>
    </div>


  <div class="form-group row">
    <label for="password" class="profile_atribut_judul">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="register">Register</button>
    </div>
  </div>
  <br>
  <p> Already have an account? </p>
  <a href="login.php" class="btn btn-success">Sign In</a>
</form>
  </div>
</main>

</body>
</html>