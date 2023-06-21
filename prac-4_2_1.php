<?php
echo "<h1 align='center'>Result:</h1>";
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];
function calculate_marks($marks, $subject){ 
    if($marks>=85){
        echo "$subject:AA grade";
        echo "<br/>";
    }
    elseif($marks>=75){
        echo "$subject:AB grade";
        echo "<br/>";
    }
    elseif($marks>=65){
        echo "$subject:BB grade";
        echo "<br/>";
    }
    elseif($marks>=55){
        echo "$subject:BC grade";
        echo "<br/>";
    }
    elseif($marks>=45){
        echo "$subject:CC grade";
        echo "<br/>";
    }
    elseif($marks>=40){
        echo "$subject:CD grade";
        echo "<br/>";
    }
    elseif($marks>=35){
        echo "$subject:DD grade";
        echo "<br/>";
    }
    else if ($marks<35){
        echo "$subject:FF grade(You are fail)";
        echo "<br/>";
    }
    else{
        echo "Please Enter Valid Marks!";
    }
}

calculate_marks($s1,"Maths");
calculate_marks($s2,"English");
calculate_marks($s3,"Science");
calculate_marks($s4,"Social Science");

?>