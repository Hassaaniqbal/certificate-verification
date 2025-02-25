<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#nftgetbalanceerc721
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

// The blockchain to work with
$arg_chain = 'CELO';

// The blockchain address that you want to get the token balance of
$arg_address = "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43";

// The address of the NFT smart contract
$arg_contract_address = "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43";

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /**
     * GET /v3/nft/balance/{chain}/{contractAddress}/{address}
     * 
     * @var \Tatum\Model\NftGetBalanceErc721200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetBalanceErc721($arg_chain, $arg_address, $arg_contract_address, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->nftGetBalanceErc721(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->nftGetBalanceErc721(): %s\n", 
        $exc->getMessage()
    );
}