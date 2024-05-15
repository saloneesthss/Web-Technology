<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="loginprocess.php" method="post">
        <fieldset>
            <legend>Login</legend>
            <div>
                <?php  
                if(isset($_GET['error message'])){
                    echo $_GET['error-message'];
                }
                ?>
            </div>
            <div>
                <label for="username">Username</label>
                <input value="<?php echo isset($_GET['username'])? $_GET['username']: '' ; ?>" type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </fieldset>
    </form>
</body>

</html>