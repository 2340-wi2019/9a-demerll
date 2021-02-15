<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php



    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
    function bmi($w, $h){ 
        $b = $w / ($h * $h);
        return $b;
    }   

    $bmi = bmi($weight, $height);

    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php

    if ($bmi <=18) {
        $output =  "underwheight";
    }
    else if ($bmi<=30) {
        $output = "normal weight";
    }
    else {
        $output =  "obese";
    }


?>

<h1>BMI Calculation</h1>

<p id="output-here">
<?php 
   echo "Your BMI value is  " . $bmi. " Which is considered  "; 
   echo "$output";
?>
</p>
</body>