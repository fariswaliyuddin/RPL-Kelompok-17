<?php
require_once "db_connection.php";
$query?? "select nama_komentar, isi_komentar from komentarnya where id_article=$id order by id desc";
$runquery = mysql_query($query);

while ($result = mysql_fetch_array($runquery))
{

$username_komentar = $result['username_komentar'];
$isikomentar = $result['isi_komentar'];

print "username : $username_komentar <br> $isikomentar <hr>" ;

}
?>