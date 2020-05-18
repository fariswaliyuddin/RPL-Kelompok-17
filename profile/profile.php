<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@700&family=Raleway&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="profile.css">
 <title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1>Green<span>tips!</span></h1>
                </div>
                <ul class="account_bar">
                    <a href="profile.php"><li>Mamang Kesbor</li></a> 
                    <a><li>Log Out</li></a>
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
    </header>
<div class="posisi">
    <br>
    <img src="fakephoto.jpg" alt="Photo Profile" class="profile_image">
    <div class="profile_username">
        <p>Hi, <span>Mamang Kesbor!</span></p>
    </div>
    <br>
    <div class="profile_atribut_container">
        <div class="profile_atribut">
            <p class="profile_atribut_judul">Date     :</p>
            <p class="profile_atribut_dalam"> 1 Januari 2000</p>
            <br>
            <br>
            <p class="profile_atribut_judul">E-mail   :</p> 
            <p class="profile_atribut_dalam"> mamangkesbor@apps.ipb.ac.id</p>
            <br>
            <br>
            <p class="profile_atribut_judul">BMI      :</p>
            <p class="profile_atribut_dalam"> Average</p>
            <br>
            <br>
            <input type="button" onclick="location.href='editprofile.php';" value="Edit Profile"/>
        </div>
    </div>
</div>
-    
</body>
</html>