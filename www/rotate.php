<?php

if ($_POST['action'] == 'r1') {
    $filename="face.jpeg";
    header('Content-type: image/jpeg');
    $source = imagecreatefromjpeg($filename);
    $rotate = imagerotate($source, 180, 0);
    imagejpeg($rotate, "facer1.jpeg");
    echo "success";
};

if ($_POST['action'] == 'r2') {
    $filename="pythonImg/face.jpeg";
    header('Content-type: image/jpeg');
    $source = imagecreatefromjpeg($filename);
    $rotate = imagerotate($source, 90, 0);
    imagejpeg($rotate, "facer2.jpeg");
};

?>

 