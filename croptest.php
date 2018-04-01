<?php
$im = imagecreatefrompng('croptesthihi.png');
$size = min(imagesx($im), imagesy($im));
$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $size, 'height' => $size]);
if ($im2 !== FALSE) {
    imagepng($im2, 'croptesthihi-cropped.png');
    imagedestroy($im2);
}
imagedestroy($im);
?>