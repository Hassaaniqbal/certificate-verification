<?php
/**
 * Requires libcurl
 */

 const chain = "CELO";
 const contractAddress = "0x3632FBA8d796580b39eb5b457a42F1AD1A6866E6";
 const tokenId = "123";
 $curl = curl_init();
 
 curl_setopt_array($curl, [
   CURLOPT_HTTPHEADER => [
     "x-api-key: t-651097bb1333e60020946fd6-f029697d9bac4c87a29714d4"
   ],
   CURLOPT_URL => "https://api.tatum.io/v3/nft/metadata/" . chain . "/" . contractAddress . "/" . tokenId,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_CUSTOMREQUEST => "GET",
 ]);
 
 $response = curl_exec($curl);
 $error = curl_error($curl);
 
 curl_close($curl);
 
 if ($error) {
   echo "cURL Error #:" . $error;
 } else {
   echo $response;
 }