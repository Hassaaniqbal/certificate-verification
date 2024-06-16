<?php

use Pinata\Pinata;

include 'vendor/autoload.php';

$apiKey = '6372529fbd19da77e2c3';
$secretKey = 'd3047417b57cb1d3aeaf459be54d3575171d793b5237749cd8e106d973949aa7';
$pinata = new Pinata($apiKey, $secretKey);
//$hash = $pinata->pinJSONToIPFS(['test' => 'moo2']);
// $hash = $pinata->removePinFromIPFS('QmT7Ce9iW9P8ATw2y5ZSYdqhrKEwZify6DPUT9DJVXYutB');
// $hash = $pinata->removePinFromIPFS('QmT7Ce9iW9P8ATw2y5ZSYdqhrKEwZify6DPUT9DJVXYutB');
// $hash = $pinata->pinHashToIPFS('QmT7Ce9iW9P8ATw2y5ZSYdqhrKEwZify6DPUT9DJVXYutB');
$hash = $pinata->pinFileToIPFS(__DIR__.'/test');
echo $hash["IpfsHash"];
