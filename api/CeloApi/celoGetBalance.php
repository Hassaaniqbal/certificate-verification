<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CeloApi/#celogetbalance
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

// Account address you want to get balance of
$arg_address = "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43";

try {

    /**
     * GET /v3/celo/account/balance/{address}
     * 
     * @var \Tatum\Model\CeloGetBalance200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->celoGetBalance($arg_address);

    echo $response['celo'];

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->celoGetBalance(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->celoGetBalance(): %s\n", 
        $exc->getMessage()
    );
}