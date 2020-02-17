<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php



    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
       { $bmi = $weight / ($height * $height);

    }   


    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php

    if ($bmi <=18) {$output =  "underwheight";
    }
    else if ($bmi > 18 AND $bmi<=30) {$output = "normal weight";

    }
    else if ($bmi > 30 AND $bmit<=30){
        $output =  " overwheight";
    }
    else if($bmi >30) {$output = "obese";
    }

?>

<h1>BMI Calculation</h1>
<?php 
   echo "Your BMI value is  " . $bmi. " Which is considered  "; 
   echo "$output";
?>
<p id="output-here"></p>
</body>