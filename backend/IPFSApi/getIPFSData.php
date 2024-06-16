<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/IPFSApi/#getipfsdata
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

// IPFS CID of the file
$arg_id = "bafkreicf5y3mdbd4emcjav6txqtbvrgg5plnkiutuc63xnbj7abkbfilrm";

try {

    /**
     * GET /v3/ipfs/{id}
     * 
     * @var \SplFileObject $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->iPFS()
        ->getIPFSData($arg_id);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->iPFS()->getIPFSData(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->iPFS()->getIPFSData(): %s\n", 
        $exc->getMessage()
    );
}