<?php
session_start();

if(!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
    header("Location: login.php?error=Please login first.");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account</title>
</head>
<body>
    <div style="color: green;">
        <?php if (isset($_GET['message'])) { ?>
        <?php echo $_GET['message']; ?>
        <?php } ?>
    </div>
    <h2><?php echo "Hello " . $_SESSION['login_user']; ?></h2>
</body>
</html>