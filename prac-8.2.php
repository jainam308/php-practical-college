<?php
$name_regex = "/^[a-zA-Z ]+$/";
$email_regex = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$phone_regex = "/^\d{10}$/";
$address_regex = "/^[a-zA-Z0-9\s,'-]*$/";
$salary_regex = "/^\d+$/";

$error = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<h1> Vora Jainam(216090307030)</h1><br>";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $department = $_POST["department"];
    $salary = $_POST["salary"];
   
    if (!preg_match($name_regex, $name)) {
        $error = "Only letters and white space allowed";
    }
    if (!preg_match($email_regex, $email)) {
        $error = "Invalid email format";
    }
    if (!preg_match($phone_regex, $phone)) {
        $error = "Invalid phone number";
    }
    if (!preg_match($address_regex, $address)) {
        $error = "Invalid address";
    }
    if (!preg_match($salary_regex, $salary)) {
        $error = "Invalid salary";
    }
    if(empty($error)){
        echo "No Validation Error found.";
    }
    else{
        echo $error;
    }
}
