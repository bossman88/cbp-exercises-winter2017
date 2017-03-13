<?php

header('Content-type: image/png');


$im = imagecreate(310, 200);
$background_color = imagecolorallocate($im, 66, 244, 223);
$text_color = imagecolorallocate($im, 22, 214, 8);
$color =  imagecolorallocate($im, 234, 231, 37);
imagestring($im, 5, 5, 5, 'Text goes here', $text_color);
imageline($im, 0, 0, 100, 100, $color);
imageline($im, 100, 100, 0, 0, $color);
imageline($im, 200, 100, 50, 59, $color);
imageline($im, -200, -100, -50, -59, $color);
imagepng($im);

