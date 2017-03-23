<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;


$qrCode = new QrCode();

$qrCode
    ->setText("Gpxqkgu wp ockn cxge Pqo, rtgpqo, vénérjqpg, gockn uwt uwrkphqdqtpvqeqfg@iockn.eqo")
    ->setSize(500)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(['r' => 1, 'g' => 99, 'b' => 174, 'a' => 0])
    ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
    ->setLabel('Grand jules de Rome de ces deux doigt!')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;

//header('Content-Type: '.$qrCode->getContentType());
//$qrCode->render();

$qrCode->save('code2.png');
