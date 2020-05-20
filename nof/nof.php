<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@700&family=Raleway&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="nof.css">
 <title>Nutrition of Food</title>
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
                    <a href = "profile.php"><li>Username</li></a> 
                    <a href = "logout.php"><li>Log Out</li></a>
                </ul>
            </div>
        </div>
        <nav>
            <div class="navigasi">
                <ul>
                    <li><a href="dailytips.php">Daily Tips</a></li>
                    <li><a href="listview_article.html">Article</a></li>
                    <li><a href="listview_news.html">Health News</a></li>
                    <li><a href="bmi.php">BMI Calculator</a></li>
                    <li><a href="nof.php" class='active'>Nutrition of Food</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <br>
    <div class="posisi">
        <div class="profile_username">
            <p>Nutrition of Food</p>
         </div>
        <div class="profile_atribut_container">
            <div class="profile_atribut">

        <br>
        <label for="nof" class="profile_atribut_judul">Pilih Makanan</label> <br>
                <select id="nof" name="nof">
                  <option value="rendang">Rendang</option>
                  <option value="nasi uduk">Nasi Uduk</option>
                  <option value="sate ayam">Sate Ayam</option>
                  <option value="salad">Salad</option>
                </select> <br>
        <input type="submit" value="Cek Nutrisi" onclick="computeNOF();">
        <br>
        <br>
        <p>Karbohidrat: <span id="output">?</span></p>
        <p>Protein: <span id="output1">?</span></p>
        <p>Vitamin: <span id="output2">?</span></p>
        <p>Lemak: <span id="output3">?</span></p>
        <input type="button" value="Reset" onclick="reset();">
    </div>
    </div>
    </div>


</body>

<script>
             function computeNOF() {
                // user inputs
                var nof = document.getElementById("nof").value;

                if (nof == "rendang"){
                    document.getElementById("output").innerText = "Ada";
                    document.getElementById("output1").innerText = "Ada";
                    document.getElementById("output2").innerText = "Tidak Ada";
                    document.getElementById("output3").innerText = "Ada";
                }
                if (nof == "nasi uduk"){
                    document.getElementById("output").innerText = "Ada";
                    document.getElementById("output1").innerText = "Tidak Ada";
                    document.getElementById("output2").innerText = "Tidak Ada";
                    document.getElementById("output3").innerText = "Tidak Ada";
                }
                if (nof == "sate ayam"){
                    document.getElementById("output").innerText = "Ada";
                    document.getElementById("output1").innerText = "Tidak Ada";
                    document.getElementById("output2").innerText = "Tidak Ada";
                    document.getElementById("output3").innerText = "Ada";
                }
                if (nof == "salad"){
                    document.getElementById("output").innerText = "Ada";
                    document.getElementById("output1").innerText = "Ada";
                    document.getElementById("output2").innerText = "Ada";
                    document.getElementById("output3").innerText = "Ada";
                }
                // document.getElementById("answer").value = output; 
            }

            function reset(){
                document.getElementById("output").innerText = "?";
                document.getElementById("output1").innerText = "?";
                document.getElementById("output2").innerText = "?";
                document.getElementById("output3").innerText = "?";
            }
</script>
</html>