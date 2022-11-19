<?php
include 'phpqrcode/qrlib.php';
$dir = 'temp/';
if (!file_exists ($dir))
    mkdir ($dir);
$filename = $dir. 'test.png';
$tamanio = 15;
$level = 'H' ;
$frameSize = 5;
$contenido = 'jose';
QRcode::png ($contenido, $filename, $level, $tamanio, $frameSize);
echo '<img src="'.$filename.'" />';
