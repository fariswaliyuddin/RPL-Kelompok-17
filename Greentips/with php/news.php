<?php
require_once "db_connection.php";
$id = $_GET['page_detil'];

if (ISSET($_GET['page_detil']))
{

$query = "select * from article where id=$id";
$runquery = mysql_query($query);
$result = mysql_fetch_array($runquery);
$isi_article = $result['isi_article'];
$title_article = $result['title_article']
}

if ($_REQUEST['entry'] == "comment")
{

$id_article = $_POST['id_article'] ;
$username = $_POST['username'];
$komentar = $_POST['komentar'];
$query2 = "insert into komentarnya values('','$username','$komentar','$id_article')";
$runquery2 =? mysql_query($query2);

}
?>

<?php
require_once "db_connection.php";
$query??? = "select username_komentar, isi_komentar from komentarnya where id_article=$id order by id desc";
$runquery = mysql_query($query);

while ($result = mysql_fetch_array($runquery))
{

$username_komentar = $result['username_komentar'];
$isikomentar = $result['isi_komentar'];

print "username : $username_komentar <br> $isikomentar <hr>" ;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Righteous&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="styleGreen.css">
    <link rel="stylesheet" type="text/css" href="header.css">
 <title>Article Greentips</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
  margin : 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  font-family : 'Acme';
}
</style>
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
<br>
<div class="art_container">
    <div class="main">
        <p class="judul"> <h2>Asam Lambung</h2></p>
        <br>
        <p class="isi"><?php  echo $row['title'] ?>
        </p>
        <br>
        <h3> Comment </h3>
        <br>
        <form action="/form/submit" method="POST">
            <textarea class="comment">Type your comment here.</textarea>
            <br>
            <input type="submit" name="submit" value="Send">
          </form>
        <br>
        <div class = "post_comment">
            <h3 class="lineheight">Mamang Kesbor</h3> 
            <p>Senin, 1-Januari-2000</p>
           <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum 
            interdum, nisi lorem egestas vitae scel
           </a>
        </div>
    </div>
    <div class="sidebar">
        <div class="inner_sidebar">
         <h2>Recent Article</h2>
         <br>
         <h4> Asam Lambung </h4>
         <br>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum 
            interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim 
            ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce 
            luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim 
            ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus 
            gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh 
            tempor porta.</span></p>
            <button href= "article.php">Read More</button>
         <hr>
    </div>
    </div>
</div>
</body>
</html>