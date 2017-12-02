<?php 
create_image();
print "<img src=img.png?.".date('U'). "/> ";
print "<img src=imgrotated.png> ";
function create_image()
{
	$im = @imagecreate(200,200) or die("Cannot initialize Image");
	$bg_color = imagecolorallocate($im, 255,255,0);
	$red = imagecolorallocate($im, 255,0,0);
	$blue = imagecolorallocate($im, 0,254,0);

	imagerectangle($im, 5, 10, 195, 50, $red);
	imagefilledrectangle($im, 5, 100, 195, 140, $blue);
	imageline ($im,   5,  100, 195, 195, $blue); 
	imagefilledellipse($im, 100, 100, 90, 90, $red);
             // blue
	$font = "https://mdn.mozillademos.org/files/2468/VeraSeBd.ttf";
    imageline ($im,   5,  5, 195, 5, $red);
    imagestringup($im, 6, 140, 150, "Hello Adewale !", $red);
    // The text to draw
$text = 'Testing...';
// Replace path by your own font path
$font = 'https://mdn.mozillademos.org/files/2468/VeraSeBd.ttf';
$rotateImg = imagerotate($im, 45, $red);
// Add some shadow to the text

	imagepng($im,"img.png");
	imagepng($im,"imgrotate.png");
	$rotate = imagerotate($im, 180,$red);
	imagepng($rotate,"imgrotated.png");
	imagedestroy($im);
}
?>
<?php

$im = imagecreatefrompng("image.png");
$yellow = imagecolorallocate($im, 255, 255, 0);
$rotate = imagerotate($im, 90,$yellow);
imagepng($rotate,"image_rotated.png");
imagedestroy($im);

print "<img src=imgrotate.png> ";

?>