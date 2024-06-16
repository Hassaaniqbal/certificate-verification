<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CeloApi/#celogettransaction
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

// Transaction hash
$arg_hash = "0x032835ca4a54226b061d3f0bc0f86f58199db571b74c90ee2921270c5cf9b1a4";

try {

    /**
     * GET /v3/celo/transaction/{hash}
     * 
     * @var \Tatum\Model\CeloTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->celoGetTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->celoGetTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->celoGetTransaction(): %s\n", 
        $exc->getMessage()
    );
}