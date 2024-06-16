<?php


$curl = curl_init();

$payload = array(
  "chain" => "CELO",
  "to" => "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43",
  "contractAddress" => "0x3632FBA8d796580b39eb5b457a42F1AD1A6866E6",
  "tokenId" => "665",
  "url" => "https://edifize.lk",
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
    echo $decoded->txId;
} else {
    echo $response;
}
}