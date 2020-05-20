<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Righteous&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="bmi_css.css">
 <title>BMI Calculator Greentips</title>
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
                    <li><a href="tipe.php">Daily Tips</a></li>
                    <li><a href="article.php">Article</a></li>
                    <li><a href="news.php">Health News</a></li>
                    <li><a href="#" class='active'>BMI Calculator</a></li>
                    <li><a href="nof.php">Nutrition of Food</a></li>
                </ul>
            </div>
        </nav>
    </header>
<br>
 <script type="text/javascript">
          
            function computeBMI() {
                // user inputs
                var height = Number(document.getElementById("height").value);
                var heightunits = document.getElementById("heightunits").value;
                var weight = Number(document.getElementById("weight").value);
                var weightunits = document.getElementById("weightunits").value;
        
        
                //Convert all units to metric
                if (heightunits == "inches") height /= 39.3700787;
                if (weightunits == "lb") weight /= 2.20462;
        
                //Perform calculation
        
                //        var BMI = weight /Math.pow(height, 2)*10000;
                var BMI = Math.round(weight / Math.pow(height, 2) * 10000);
        
                //Display result of calculation
                document.getElementById("output").innerText = Math.round(BMI * 100) / 100;
        
                var output = Math.round(BMI * 100) / 100
                if (output < 18.5)
                    document.getElementById("comment").innerText = "Underweight";
                else if (output >= 18.5 && output <= 25)
                    document.getElementById("comment").innerText = "Normal";
                else if (output >= 25 && output <= 30)
                    document.getElementById("comment").innerText = "Obese";
                else if (output > 30)
                    document.getElementById("comment").innerText = "Overweight";
                // document.getElementById("answer").value = output; 
            }
        </script>`enter code here`
         </head>
         <body>
        <h1>Body Mass Index Calculator</h1>
        <p>Enter your height: <input type="text" id="height"/>
            <select type="multiple" id="heightunits">
                <option value="centimetres" selected="selected">centimetres</option>
                <option value="inches">inches</option>
            </select>
             </p>
        <p>Enter your weight: <input type="text" id="weight"/>
            <select type="multiple" id="weightunits">
                <option value="kg" selected="selected">kilograms</option>
                <option value="lb">pounds</option>
            </select>
        </p>
        <input type="submit" value="computeBMI" onclick="computeBMI();">
        <h1>Your BMI is: <span id="output">?</span></h1>
        
        <h2>This means you are: <span id="comment"> ?</span> </h2> 
<footer>

</footer>

</body>
</html>