<?php
if ($_FILES['file']['name']) {
    $name = md5(rand(100, 200));
    $ext = explode('.', $_FILES['file']['name']);
    $filename = $name . '.' . $ext[1];
    $destination = 'assets/' . $filename; //change this directory
    $location = $_FILES["file"]["tmp_name"];

    move_uploaded_file($location, $destination);
    echo 'assets/' . $filename; //change this URL 
} else {
    echo $message = 'Ooops! Your upload triggered the following error: ' . $_FILES['file']['error'];
}  ?>

