<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@700&family=Raleway&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title> Home </title>
  <body>
  <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1>Green<span>tips!</span></h1>
                </div>
                <ul class="account_bar">
                    <a href="#"><li>Username</li></a> 
                    <a href="logout.php"><li>Logout</li></a>
                </ul>
            </div>
        </div>
        <nav>
            <div class="navigasi">
                <ul>
                    <li><a href="#">Daily Tips</a></li>
                    <li><a href="listview_article.html">Article</a></li>
                    <li><a href="listview_news.html">Health News</a></li>
                    <li><a href="#">BMI Calculator</a></li>
                    <li><a href="#">Nutrition of Food</a></li>
                </ul>
            </div>
        </nav>
  </div>
</nav>

<br>

<main role="main" class="posisi">

  <div class="profile_username">
    <p> Selamat Datang, <span> <?php echo $_SESSION['email']; ?> </span> </p>
</div>
<br>
<br>
<div class="profile_atribut_container">
  <div class="profile_atribut">
        <p>silahkan lanjut ke dailytips!</p>
        <input type="button" onclick="location.href='tips.php';" value="Daily Tips"/>
      </div>
    </div>
</main>
</body>
</html>