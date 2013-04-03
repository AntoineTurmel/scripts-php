<?php

/*
 * obtain exif datas of a picture with PHP
 * official documentation : http://php.net/manual/en/book.exif.php
 */

$pic = 'your-picture.jpg';
$exif = exif_read_data($pic, 'IFD0', 0);
if ($exif) {
  $height = $exif['COMPUTED']['height'];
  $width = $exif['COMPUTED']['width'];
  $make = $exif['make'];
  $model = $exif['model'];
  $exposure = $exif['ExposureTime'];
  $isoSpeed = $exif['ISOSpeedRatings'];
  $date = $exif['DateTimeOriginal'];
  $flash = $exif['Flash'];
  $focal = $exif['FocalLength'];
  // ... more details about exif options with : var_dump($exif)
} else {
  echo 'exif unavailable';
}

?>
