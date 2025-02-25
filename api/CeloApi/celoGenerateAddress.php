<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CeloApi/#celogenerateaddress
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

// Extended public key of wallet.
$arg_xpub ='xpub6EHSGesY2WopBvoJnpWLd9z3GFvhnYGe9uYNyREmzeyrc4yfDFP5aLWpuPtwF6dnkcbyfKKxbPkBoR8JkyyrhfXna2wf6N38qwmAmQN4utA';


// Derivation index of desired address to be generated.  
$arg_index = 1;

try {

    /**
     * GET /v3/celo/address/{xpub}/{index}
     * 
     * @var \Tatum\Model\CeloGenerateAddress200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->celoGenerateAddress($arg_xpub, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->celoGenerateAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->celoGenerateAddress(): %s\n", 
        $exc->getMessage()
    );
}