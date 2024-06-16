<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/IPFSApi/#storeipfs
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

$text = $_POST['key'];

// Create a temporary file and write the text to it
$tempFilePath = tempnam(sys_get_temp_dir(), 'IPFS');
file_put_contents($tempFilePath, $text);

// Create a SplFileObject from the temporary file
$arg_file = new \SplFileObject($tempFilePath);

try {

    /**
     * POST /v3/ipfs
     * 
     * @var \Tatum\Model\StoreIPFS200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->iPFS()
        ->storeIPFS($arg_file);

    echo $response->getIpfsHash(); // or getIpfs_hash(), depending on the actual method name


} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->iPFS()->storeIPFS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->iPFS()->storeIPFS(): %s\n", 
        $exc->getMessage()
    );
}