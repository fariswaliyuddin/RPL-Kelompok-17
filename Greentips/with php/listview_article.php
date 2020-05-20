<?php
require_once "db_connection.php";

$query??? = "select * from article";
$runquery = mysql_query($query);

while($result = mysql_fetch_array($runquery))

{

$id = $result['id'];
$title = $result['title'];
$isi_article = $result['isi_article'];
$isi = substr($isi_article,0,400);
$isi = substr($isi_article,0,strrpos($isi," "));

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Righteous&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="styleGreen.css">
    <link rel="stylesheet" type="text/css" href="listview.css">
    <link rel="stylesheet" type="text/css" href="header.css">
 <title>Article Greentips</title>
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
                    <li><a href="#">Daily Tips</a></li>
                    <li><a href="listview_article.html" class='active'>Article</a></li>
                    <li><a href="listview_news.html">Health News</a></li>
                    <li><a href="#">BMI Calculator</a></li>
                    <li><a href="#">Nutrition of Food</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="list_container">
        <div class="inner_list_container">
            <div class="column">
                <a href="article.html" class= "warnaFont">
                    <div class="column_bi">
                    <h2><?php echo $row['title']?></h2>
                    <p><?php echo $row['isi']?></p>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="#" class= "warnaFont">
                    <div class="column_bi">
                        <hr>
                        <h2><?php echo $row['title']?></h2>
                        <p><?php echo $row['isi']?></p>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="#" class= "warnaFont">
                    <div class="column_bi">
                            <hr>
                            <h2><?php echo $row['title']?></h2>
                            <p><?php echo $row['isi']?></p>
                    </div>
                </a>    
            </div>
            <div class="column">
                <a href="#" class = "warnaFont">
                    <div class="column_bi">
                        <hr>
                        <h2><?php echo $row['title']?></h2>
                        <p><?php echo $row['isi']?></p>
                    </div>
                </a>    
            </div>
        </div>
    </div>
</body>
</html>
