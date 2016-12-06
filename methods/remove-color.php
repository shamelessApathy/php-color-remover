<?php


var_dump($_POST);

$file = $_POST['filename'];
$color = $_POST['rgb'];
$color = explode(" ", $color);
$r = $color[0];
$g = $color[1];
$b = $color[2];

$im = new Imagick($file);
$img = $im;
$quantum = $img->getQuantumDepth()['quantumDepthLong'];
$fuzz = 0.2 * pow(2,$quantum); // From black to gray50
$remove = new ImagickPixel("rgb($r,$g,$b");
$im->paintTransparentImage( $remove , 0, $fuzz);

$im->setImageFormat('png');


?>
<?php if($im->writeImage($file)):?>

<img src="<?php echo $file; ?>"/>
<?php endif; ?>