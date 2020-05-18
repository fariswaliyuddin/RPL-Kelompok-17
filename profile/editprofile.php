<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@700&family=Raleway&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="profile.css">
 <title>Edit Profile</title>
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
    <div class="profile_atribut_container">
        <div class="profile_atribut">
            <form action="/action_page.php">
                <label for="username" class="profile_atribut_judul">Username</label> <br>
                <input type="text" id="username" name="username" placeholder="Your new username..">
                <br>

                <label for="birthday" class="profile_atribut_judul">Date</label> <br>
                <input type="date" id="birthday" name="date" placeholder="Your birthday...">
                <br>
    
                <label for="email" class="profile_atribut_judul">E-mail</label> <br>
                <input type="text" id="email" name="email" placeholder="Your new e-mail..">
                <br>
            
                <label for="bmi" class="profile_atribut_judul">BMI</label> <br>
                <select id="bmi" name="bmi">
                  <option value="underweight">Underweight</option>
                  <option value="normal">Normal</option>
                  <option value="obese">Obese</option>
                  <option value="overweight">Overweight</option>
                </select>
                <br>
            <input type="button" onclick="location.href='profile.php';" value="Save"/>
        </div>
    </div>
</div>
-    
</body>
</html>