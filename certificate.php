<?php
header('content-type:image/jpeg');
$font="BRUSHSCI.TTF";
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="Meow meow";
imagettftext($image,50,0,69,282,$color,$font,$name);
$date="69-96-9669";
imagettftext($image,20,0,75,425,$color,"AGENCYR.TTF",$date);
imagejpeg($image);
imagedestroy($image);
?>