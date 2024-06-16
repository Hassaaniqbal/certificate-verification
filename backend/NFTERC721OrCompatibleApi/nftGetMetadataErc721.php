<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#nftgetmetadataerc721
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
$arg_chain = 'CELO';

// The blockchain address of the NFT to get metadata for
$arg_contract_address = "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43";

// The ID of the NFT to get metadata for<br/>Do <b>not</b> use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana.
$arg_token_id = "123";

// (Flow only) The account that holds the NFT
$arg_account = "0xdfed6f33e22ee3c48f1f976a0664b3a555401e43";

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /**
     * GET /v3/nft/metadata/{chain}/{contractAddress}/{tokenId}
     * 
     * @var \Tatum\Model\NftMetadataErc721 $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetMetadataErc721($arg_chain, $arg_contract_address, $arg_token_id, $arg_account, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->nftGetMetadataErc721(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->nftGetMetadataErc721(): %s\n", 
        $exc->getMessage()
    );
}