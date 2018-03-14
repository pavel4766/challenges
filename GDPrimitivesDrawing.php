<?php
header('Content-type: image/png');
$png_image = imagecreate(300, 300);
$black = imagecolorallocate($png_image, 0,0,0);
$white = imagecolorallocate($png_image, 255,255,255);
imagefilltoborder($png_image, 0, 0, $white, $white);
imageRectangle($png_image,2, 298, 298, 2, $black);
imagefilledellipse ($png_image, 150, 150, 235, 285, $white);      // HEAD
imagefilledrectangle ($png_image, 40, 85, 255, 90, $black );    //GLASSES
imagefilledellipse ($png_image, 125, 90, 50, 95, $black);      // LEFT EYE
imagefilledellipse ($png_image, 125, 90, 40, 85, $white);      // LEFT EYE FILL
imagefilledellipse ($png_image, 175, 90, 50, 95, $black);      // RIGHT EYE
imagefilledellipse ($png_image, 175, 90, 40, 85, $white);      // RIGHT EYE FILL
imagefilledellipse ($png_image, 50, 120, 30, 90, $black);      // LEFT EAR
imagefilledellipse ($png_image, 50, 115, 25, 95, $white);      // LEFT EAR FILL
imagefilledellipse ($png_image, 250, 120, 30, 90, $black);      // RIGHT EAR
imagefilledellipse ($png_image, 250, 115, 25, 95, $white);      // RIGHT EAR FILL
imagefilledellipse($png_image, 150, 150, 35, 35, $black);    //NOSE
imagepng($png_image);
imagedestroy($png_image);
?>