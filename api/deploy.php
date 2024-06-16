<?php
/**
 * Requires libcurl
 */

 $curl = curl_init();

 $payload = array(
   "chain" => "CELO",
   "name" => "CERTICHAIN TOKEN",
   "symbol" => "CERCN",
   "publicMint" => true,
   "feeCurrency" => "CELO",
   "fromPrivateKey" => "0x43d3089485221f6b78d0271d31010cb99a38d6e060b748fe70ca24cfad1d1e23"
 );
 
 curl_setopt_array($curl, [
   CURLOPT_HTTPHEADER => [
     "Content-Type: application/json",
     "x-api-key: t-651097bb1333e60020946fd6-f029697d9bac4c87a29714d4"
   ],
   CURLOPT_POSTFIELDS => json_encode($payload),
   CURLOPT_URL => "https://api.tatum.io/v3/nft/deploy",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_CUSTOMREQUEST => "POST",
 ]);
 
 $response = curl_exec($curl);
 $error = curl_error($curl);
 
 curl_close($curl);
 
 if ($error) {
   echo "cURL Error #:" . $error;
 } else {
   echo $response;
 }