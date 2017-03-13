<?php
header('Content-Type: image/gif');
readfile("kosta.gif");
$size = getimagesize('kosta.gif');
//echo $size[0] . 'x' . $size[1];
$original = imagecreatefromgif('kosta.gif');

imagegif($original);
$ratio = $size[0]/$size[1];
$new = imagecreatetruecolor(200,200/ $ratio );








//$size[0]   and [1]    are width and height of   getimagesize function!!! 

//imagecopyresampled ( resource $dst_image , resource $src_image ,
// int $dst_x , int $dst_y , int $src_x , 
//int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )
//imagecopyresampled($new, $original, 0, 0,0, 0, 200, 200/ $ratio, $size[0], $size[1]);    //3=0 4=0   left top corner
imagecopyresampled($new, $original, 0, 0,0, 0, 200, 200/ $ratio, $size[0], $size[1]);    //3=0 4=0   left top corner


$text_color = imagecolorallocate($new, 22, 214, 8);
imagestring($new, 5, 5, 5, 'ROFL', $text_color);
imagegif($new, 'kosta-smallv2.gif');
imagegif($new);