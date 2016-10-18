<?php

$fileObject = $_FILES['image-file'];
$fileTempName = $fileObject['tmp_name'];
$fileName = $fileObject['name'];
$kaboom = explode('.',$fileName);
$ext = $kaboom[1];

function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = str_split($characters);
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring = $characters[rand(0, count($characters))];
    }
    return $randstring;
}

function imageCreateFromAny($filepath) {
// Test if File sent is really an image
    $type = exif_imagetype($filepath); // [] if you don't have exif you could use getImageSize()
    $allowedTypes = array(
        1,  // [] gif
        2,  // [] jpg
        3,  // [] png
        6   // [] bmp
    );
    if (!in_array($type, $allowedTypes)) {
        return false;
    }
    switch ($type) {
        case 1 :
            $im = imageCreateFromGif($filepath);
        break;
        case 2 :
            $im = imageCreateFromJpeg($filepath);
        break;
        case 3 :
            $im = imageCreateFromPng($filepath);
        break;
        case 6 :
            $im = imageCreateFromBmp($filepath);
        break;
    }   
    return $im; 
}

// Creating random string to use as image name
$randomName = RandomString();
$randomName = $randomName . '.png';
// Creating and image to manipulate
$handledImage = imageCreateFromAny($fileTempName);

// Converting image to png
$convertedImage = imagepng($handledImage, '../b_tmp/'. $randomName);

$pathToNewImage = 'b_tmp/' . $randomName;

$_SESSION['image-path'] = $pathToNewImage;

require('../views/edit-view.php');


?>