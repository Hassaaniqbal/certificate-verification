<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#nftgettransactionbyaddress
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

// The blockchain to work with
$arg_chain = "CELO";

// Account address you want to get balance of
$arg_address = "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43";

// Address of the token smart contract
$arg_token_address = "0x3c8153Af71f9701aec3f000f1e3FAEa67d5C5055";

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain next page of the data.
$arg_offset = 1;

// Transactions from this block onwards will be included.
$arg_from = 1087623;

// Transactions up to this block will be included.
$arg_to = 108782300000000000;

try {

    /**
     * GET /v3/nft/transaction/{chain}/{address}/{tokenAddress}
     * 
     * @var \Tatum\Model\NftTx[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTransactionByAddress($arg_chain, $arg_address, $arg_token_address, $arg_page_size, $arg_offset, $arg_from, $arg_to);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->nftGetTransactionByAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->nftGetTransactionByAddress(): %s\n", 
        $exc->getMessage()
    );
}