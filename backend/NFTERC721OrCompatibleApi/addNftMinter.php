<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#addnftminter
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

$arg_add_nft_minter = (new \Tatum\Model\AddNftMinter())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // The blockchain address of the NFT smart contract
    ->setContractAddress('0xdfed6f33e22ee3c48f1f976a0664b3a555401e43')
    
    // The blockchain address to add to the smart contract as an NFT minter<br/>To find the address of t...
    ->setMinter('0xdfed6f33e22ee3c48f1f976a0664b3a555401e43')
    
    // The private key of the blockchain address that has priviledges to add an NFT minter to the NFT sm...
    ->setFromPrivateKey('0x43d3089485221f6b78d0271d31010cb99a38d6e060b748fe70ca24cfad1d1e23')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null)
    
    // (optional) (Celo only) The currency in which the transaction fee will be paid
    ->setFeeCurrency('CELO');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /**
     * POST /v3/nft/mint/add
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->addNftMinter($arg_add_nft_minter);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->addNftMinter(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->addNftMinter(): %s\n", 
        $exc->getMessage()
    );
}