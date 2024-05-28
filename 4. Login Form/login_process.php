<?php
//echo "<pre>";
//echo "get";
//print_r($_GET);
//echo "post";
//print_r($_POST);

if($_POST['usernmae']==='admin'   && $_POST['password']==='admin@123')
{
    echo "you logged in successfully";
    header("location:dashboard.php");
} else {
   // echo"invalid credentials";
   header("location: login.php?error-message=invalid credentials.");
}

die;
?>