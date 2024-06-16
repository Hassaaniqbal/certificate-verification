<?php
require_once "config.php";


$dbh = Config::dbh();


class Main {

  public static function test()
  {
   return "ok";

  }
  

  public static function createCertificate($data,$studentData, $hash, $txId)
  {
      $status = "SUCCESS";
      $ipfsurl = "https://beige-grieving-rook-532.mypinata.cloud/ipfs/".$hash;
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      $dt12 = new DateTime("now", new DateTimeZone('Asia/Colombo'));
      $last_date = $dt12->format('Y-m-d H:i:s');

    //   $studentData = json_decode($studentData, true);
  
      $stmt = $db_connection->prepare("INSERT INTO `certificates`(`ipfsUrl`,`cid`, `data`, `blockdata`,`date`, `status`, `hash`) VALUES (?,?,?,?,?,?,?)");
      $stmt->bind_param("sssssss", $ipfsurl, $data, $studentData, $txId, $last_date, $status, $hash);
      
      $success = $stmt->execute();


      if ($success == true) {


    

          return "ok";
      }
      else
      {
          return "error";
      }
  }

  public static function updateBlock($id,$trxid)
  {

      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      $stmt2 = $db_connection->prepare("UPDATE `certificates` SET `blockdata`=? WHERE `id`= ?");
      $stmt2->bind_param("ss", $trxid, $id);
      $success = $stmt2->execute();
      if ($success == true) {
       return "ok";
      }
      else
      {
       return "0";
      }
  
  }
    
  
  public static function getCertificates()
    {
  
    
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      $stmtz = $db_connection->prepare("SELECT * FROM certificates");
      $stmtz->execute();
      $result = $stmtz->get_result();
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

  
        
    return $data;

    }

    public static function mintNTF($id,$url,$data,$studentData, $hash)
    {
      $curl = curl_init();

$payload = array(
  "chain" => "CELO",
  "to" => "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43",
  "contractAddress" => "0x3632FBA8d796580b39eb5b457a42F1AD1A6866E6",
  "tokenId" => "$id",
  "url" => "$url",
  "fromPrivateKey" => "0x43d3089485221f6b78d0271d31010cb99a38d6e060b748fe70ca24cfad1d1e23"
);

curl_setopt_array($curl, [
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "x-api-key: t-651097bb1333e60020946fd6-f029697d9bac4c87a29714d4"
  ],
  CURLOPT_POSTFIELDS => json_encode($payload),
  CURLOPT_URL => "https://api.tatum.io/v3/nft/mint",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
]);

$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if ($error) {
  echo "cURL Error #:" . $error;
} else {
  $decoded = json_decode($response);

// Check if 'txId' property exists
if (isset($decoded->txId)) {
 
    echo Main::createCertificate($data,$studentData, $hash, $decoded->txId);
} else {
    echo $response;
}
}


    }
    

}

?>