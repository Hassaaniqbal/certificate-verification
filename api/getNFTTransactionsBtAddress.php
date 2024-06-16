<?php



 const chain = "CELO";
 const address = "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43";
 const tokenAddress = "0x3632FBA8d796580b39eb5b457a42F1AD1A6866E6";
 $query = array(
   "pageSize" => "50"
 );
 
 $curl = curl_init();
 
 curl_setopt_array($curl, [
   CURLOPT_HTTPHEADER => [
     "x-api-key: t-651097bb1333e60020946fd6-f029697d9bac4c87a29714d4"
   ],
   CURLOPT_URL => "https://api.tatum.io/v3/nft/transaction/" . chain . "/" . address . "/" . tokenAddress . "?" . http_build_query($query),
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_CUSTOMREQUEST => "GET",
 ]);
 
 $response = curl_exec($curl);
 $error = curl_error($curl);
 
 curl_close($curl);
 header('Content-Type: application/json');
 if ($error) {
   echo "cURL Error #:" . $error;
 } else {
   echo $response;
 }