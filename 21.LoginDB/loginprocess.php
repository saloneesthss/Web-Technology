<?php
session_start();

$sql=new PDO(
    'mysql:host=localhost;dbname=admin',
    'root',
    'root'
);
$user_name=$_POST['username'];
$password=$_POST['pwd'];
$login=$sql->prepare("select * from login_user where user_name='$user_name' and password='$password' ");
$login->execute();
$user=$login->fetch();

if ($user) {
    $_SESSION['login_user']=$user['user_name'];
    header("Location: myaccount.php?message=You are now logged in successfully.");
    die;
} else {
    header("Location: login.php?error=Invalid credintals.");
    die;
}
?>