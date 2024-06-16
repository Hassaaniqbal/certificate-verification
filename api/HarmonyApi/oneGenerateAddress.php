<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo "Error";
    exit();
}
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/HarmonyApi/#onegenerateaddress
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
// "cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 1) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// 🐛 Enable debugging on the MainNet
// $sdk->mainnet()->config()->setDebug(true);
$json_str = file_get_contents('php://input');

    // Decode the JSON string into an associative array
    $json_obj = json_decode($json_str, true);

    // Now $json_obj is an associative array, so you can access the data like this:
    $key = $json_obj['key'];
// Extended public key of wallet.
$arg_xpub = $key;

// Derivation index of desired address to be generated.
$arg_index = 1;

try {
    
    

    /**
     * GET /v3/one/address/{xpub}/{index}
     * 
     * @var \Tatum\Model\GeneratedAddressOne $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->harmony()
        ->oneGenerateAddress($arg_xpub, $arg_index);

        echo $response->getAddress();

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->harmony()->oneGenerateAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->harmony()->oneGenerateAddress(): %s\n", 
        $exc->getMessage()
    );
}