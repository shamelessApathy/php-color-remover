<?php

$file = $_FILES['image-file'];
$tmp = $file['tmp_name'];
$name = $file['name'];
$kaboom = explode('.',$name);
$ext = $kaboom[1];


$filename = "/var/www/html/php-color-remover$tmp";

$im = new Imagick($tmp);
//$im->setImageFormat('png');
$im->writeImage($filename);

// output the image to the browser as a png
?>

<?php
echo '<img id="image" src="data:image/jpg;base64,'.base64_encode($im->getImageBlob()).'" alt="" />';
?>
<canvas  id='myCanvas'>
</canvas>
<form action='/methods/remove-color.php' method='POST'>
    <input id='rgb' value='' type='text' name='rgb'>
    <input name='filename' value="<?php echo $filename;?>">
    <button type='submit'>Submit</button>
</form>
<script src='../js/jquery.js'></script>
<script src='../js/script.js'></script>


<?php

/*function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = str_split($characters);
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring = $characters[rand(0, count($characters))];
    }
    return $randstring;
}
*/
/*function imageCreateFromAny($filepath) {
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
*/



?>