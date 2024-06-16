<?php

/**
 * Requires libcurl
 */

 const chain = "CELO";
 const hash = "0x6f381d611a9a0956449b3df90a5d149b8ae1fe944c252dc1cd57883a9aeea13f";
 $curl = curl_init();
 
 curl_setopt_array($curl, [
   CURLOPT_HTTPHEADER => [
     "x-api-key: t-651097bb1333e60020946fd6-f029697d9bac4c87a29714d4"
   ],
   CURLOPT_URL => "https://api.tatum.io/v3/nft/transaction/" . chain . "/" . hash,
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