<?php
$fileName = "hello.txt";
$file = fopen($fileName, "a+");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
fwrite($file, $_POST['content']);
}
$file = fopen($fileName, "a+");
$content = fread($file, filesize($fileName));
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="content" cols="80" rows="10">
            <?php echo $content; ?>
        </textarea>
        <br>
        <button type="submit">Save Content</button>
    </form>
</body>
</html>
