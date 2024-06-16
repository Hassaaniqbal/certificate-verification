<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NFTERC721OrCompatibleApi/#mintnftcelo
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

$arg_mint_nft_celo = (new \Tatum\Model\MintNftCelo())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // The blockchain address to send the NFT to
    ->setTo('0xdfed6f33e22ee3c48f1f976a0664b3a555401e43')
    
    // The blockchain address of the smart contract to build the NFT on
    ->setContractAddress('0xdfed6f33e22ee3c48f1f976a0664b3a555401e43')
    
    // The ID of the NFT
    ->setTokenId('56456')
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.or...
    ->setUrl('https://edifize.lk/')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('CELO')
    
    // The private key of the blockchain address that will pay the fee for the transaction
    ->setFromPrivateKey('0x43d3089485221f6b78d0271d31010cb99a38d6e060b748fe70ca24cfad1d1e23')
    
    // (optional) The blockchain address of the custom fungible token
    ->setErc20('0xdfed6f33e22ee3c48f1f976a0664b3a555401e43')
    
    // (optional) Set to "true" if the NFT smart contract is of the provenance type; otherwise, set to "false".
    ->setProvenance(false)
    
    // (optional) The blockchain addresses where the royalties will be sent every time the minted NFT is transferre...
    ->setAuthorAddresses(null)
    
    // (optional) The amounts of the royalties that will be paid to the authors of the minted NFT every time the NF...
    ->setCashbackValues(null)
    
    // (optional) The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be...
    ->setFixedValues(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /**
     * POST /v3/nft/mint
     * 
     * @var \Tatum\Model\MintNftExpress200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->mintNftCelo($arg_mint_nft_celo, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nFTERC721OrCompatible()->mintNftCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nFTERC721OrCompatible()->mintNftCelo(): %s\n", 
        $exc->getMessage()
    );
}