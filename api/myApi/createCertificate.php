<?php


if(!isset($_POST['data']) && $_POST['post'] != 33)
{
    echo "Error";
    exit();
}

use Pinata\Pinata;

include 'pinataApi/vendor/autoload.php';

$apiKey = '6372529fbd19da77e2c3';
$secretKey = 'd3047417b57cb1d3aeaf459be54d3575171d793b5237749cd8e106d973949aa7';



include_once("../../controllers/main.php");

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $uploadsDir = 'uploads/';  // Ensure this directory exists and is writable
    $destination = $uploadsDir . $_POST['data'].'.png';

    // Check if the uploads directory exists
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0777, true);
    }

    // Move the uploaded file
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        // echo "File uploaded successfully to " . $destination;
        $pinata = new Pinata($apiKey, $secretKey);

$hash = $pinata->pinFileToIPFS($destination);

// echo $hash["IpfsHash"];
$ipfsurl = "https://beige-grieving-rook-532.mypinata.cloud/ipfs/".$hash["IpfsHash"];

$studentDataArray = json_decode($_POST['studentData'], true);
$studentDataArray['ipfsurl'] = $ipfsurl;
$studentDataArray['By'] = 'Certichain';

$updatedStudentDataJSON = json_encode($studentDataArray);

$hash2 = $pinata->pinJSONToIPFS($studentDataArray);
$ipfsurl2 = "https://beige-grieving-rook-532.mypinata.cloud/ipfs/".$hash2["IpfsHash"];

$trxid = Main::mintNTF(time(),$ipfsurl2,$_POST['data'],$updatedStudentDataJSON ,$hash2["IpfsHash"]);
echo $trxid;


    } else {
        // echo "Error uploading file.";
    }
}


