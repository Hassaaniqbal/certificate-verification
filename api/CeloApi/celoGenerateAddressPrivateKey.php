<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CeloApi/#celogenerateaddressprivatekey
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
$sdk->mainnet()->config()->setDebug(true);

$arg_priv_key_request = (new \Tatum\Model\PrivKeyRequest())
    
    // Derivation index of private key to generate.
    ->setIndex(1)
    
    // Mnemonic to generate private key from.
    ->setMnemonic('absorb bundle cannon empty notable onion orbit rebel return siren utility way');

try {

    /**
     * POST /v3/celo/wallet/priv
     * 
     * @var \Tatum\Model\PrivKey $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->celoGenerateAddressPrivateKey($arg_priv_key_request);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->celoGenerateAddressPrivateKey(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->celoGenerateAddressPrivateKey(): %s\n", 
        $exc->getMessage()
    );
}