<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('APPATH', dirname(__FILE__));

include APPATH.'func.php';
$files = array(
	'm1' =>'m1.wav',
	'm2' =>'m2.wav',
	'm3' =>'m3.wav'
);
$output = '_final1.wav';
$dir = APPATH;
$res = mix_audio($files, $output, $dir);


print_r($res);
die;
?>

<html>
  <head>
    <title>Mix Audio</title>
  </head>
  <body style="font-size: 14px;">
    <h1>Uses SOX</h1>
  </body>
</html>
