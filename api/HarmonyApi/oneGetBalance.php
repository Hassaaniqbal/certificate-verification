<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/HarmonyApi/#onegetbalance
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo "Error";
    exit();
}

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 1) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// 🐛 Enable debugging on the MainNet
// $sdk->mainnet()->config()->setDebug(true);
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str, true);

// Now $json_obj is an associative array, so you can access the data like this:
$key = $json_obj['key'];
// Account address you want to get balance of
$arg_address = $key;

// Shard to read data from
$arg_shard_id = 0;

try {

    /**
     * GET /v3/one/account/balance/{address}
     * 
     * @var \Tatum\Model\OneBalance $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->harmony()
        ->oneGetBalance($arg_address, $arg_shard_id);

        echo $response->getBalance();


} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->harmony()->oneGetBalance(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->harmony()->oneGetBalance(): %s\n", 
        $exc->getMessage()
    );
}