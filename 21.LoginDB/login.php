<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        input {
            padding: 5px;
            width: 40%;
        }
    </style>
</head>
<body>
    <h2>Login</h2>

    <div id="errorMessage" style="color: red;">
        <?php if (isset($_GET['error'])) { ?>
        <?php echo $_GET['error']; ?>
        <?php } ?>
    </div>

    <form action="loginprocess.php" method="post">
        <label for="username">Username:</label> <br>
        <input type="text" name="username" id="username"> <br><br>

        <label for="pwd">Password:</label> <br>
        <input type="password" name="pwd" id="pwd"> <br><br>

        <button type="submit">Log In</button>
    </form>
    <script>
    </script>
</body>
</html>