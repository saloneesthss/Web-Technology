<?php
if (!is_uploaded_file($_FILES['photo']['tmp_name'])) {
    die("Please upload a photo.");
}

$allowedSize=(1024*1024)*5; //5mb
if ($_FILES['photo']['size'] > $allowedSize) {
    echo "The file size is too large.Upload less than 5mb of size.";
    die;
}

$fileName=$_FILES['photo']['name'];
move_uploaded_file(
    $_FILES['photo']['tmp_name'],
    './uploads/' . $fileName
);
die;
if (file_exists("./uploads/$fileName")) {
unlink("./uploads/$fileName");
}