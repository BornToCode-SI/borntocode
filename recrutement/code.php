<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;


$qrCode = new QrCode();

$qrCode
    ->setText("Bienvenue BornToCode - Sup Info ! Si vous l'êtes dans l'âme, continuons ensemble sur https://github.com/BornToCode-SI/borntocode")
    ->setSize(500)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(['r' => 1, 'g' => 99, 'b' => 174, 'a' => 0])
    ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
    ->setLabel('Avez-vous cassé le code ?')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;

//header('Content-Type: '.$qrCode->getContentType());
//$qrCode->render();

$qrCode->save('code.png');
