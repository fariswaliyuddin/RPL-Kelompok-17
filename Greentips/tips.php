<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Righteous&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="tips_css.css">
 <title>Daily Tips Greentips</title>
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
                    <a><li>Mamang Kesbor</li></a> 
                    <a><li>Log Out</li></a>
                </ul>
            </div>
        </div>
        <nav>
            <div class="navigasi">
                <ul>
                    <li><a href="tips.php" class='active'>Daily Tips</a></li>
                    <li><a href="article.php">Article</a></li>
                    <li><a href="news.php">Health News</a></li>
                    <li><a href="#">BMI Calculator</a></li>
                    <li><a href="#">Nutrition of Food</a></li>
                </ul>
            </div>
        </nav>
    </header>
<br>
<div class="art_container" style="max-width: 400px">
    <div class="main">
        <h1><i>Jangan lupa minum air mineral setelah beraktivitas</i></h1>
    </div>
    <div class="main">
        <h1><i>Weekend ini olahraga yuk</i></h1>
    </div>
</div>
<div class="tombol">
<input type="button" onclick="location.href='article.php';" value="Article related">
<input type="button" onclick="location.href='news.php';" value="News related">
</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("main");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}
</script>

</body>
</html>