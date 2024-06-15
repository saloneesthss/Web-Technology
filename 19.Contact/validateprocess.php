<?php
echo "<pre>";
print_r($_POST);

$isValid=true;
$errorMessage="";
if ($_POST['name']==="") {
    $errorMessage .= "Please enter your name.<br>";
    $isValid=false;
}

if ($_POST['email']==="") {
    $errorMessage .= "Please enter your email.<br>";
    $isValid=false;
}

if ($_POST['phone']==="") {
    $errorMessage .= "Please enter your phone number.<br>";
    $isValid=false;
}

if ($_POST['country']==="") {
    $errorMessage .= "Please enter your country.<br>";
    $isValid=false;
}

if ($_POST['message']==="") {
    $errorMessage .= "Please enter a message.<br>";
}

if ($isValid===false) {
    header("Location: contactform.php?error_message=$errorMessage");
    die;
}
?>