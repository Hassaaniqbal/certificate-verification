<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CeloApi/#celogettransactionbyaddress
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

// Max number of items per page is 50.
$arg_page_size = 50;

// Offset to obtain next page of the data.
$arg_offset = 0;

// Transactions from this block onwards will be included.
$arg_from = 1087623;

// Transactions up to this block will be included.
$arg_to = 108782300000;

// Sorting of the data. ASC - oldest first, DESC - newest first.
$arg_sort = "DESC";

try {

    /**
     * GET /v3/celo/account/transaction/{address}
     * 
     * @var \Tatum\Model\CeloTx[] $response
     */

     header('Content-Type: application/json');
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->celoGetTransactionByAddress($arg_address, $arg_page_size, $arg_offset, $arg_from, $arg_to, $arg_sort);
        echo json_encode($response, JSON_PRETTY_PRINT);
   

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->celo()->celoGetTransactionByAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->celo()->celoGetTransactionByAddress(): %s\n", 
        $exc->getMessage()
    );
}