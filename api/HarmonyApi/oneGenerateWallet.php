<?php
if(!isset($_POST['key']) && $_POST['post'] != 54)
{
    echo "Error";
    exit();
}
//  header('Content-Type: application/json');
// Use any PSR-4 autoloader
require_once dirname(__DIR__, 1) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// 🐛 Enable debugging on the MainNet
// $sdk->mainnet()->config()->setDebug(true);

// Mnemonic to use for generation of extended public and private keys.
$arg_mnemonic = $_POST['key'];

try {

    /**
     * GET /v3/one/wallet
     * 
     * @var \Tatum\Model\Wallet $response
     */

    $response = $sdk->mainnet()
        ->api()
        ->harmony()
        ->oneGenerateWallet($arg_mnemonic);


   $responseArray = [
    'status' => 'ok',
    'result' =>  $response['xpub']
];
// echo json_encode($responseArray);
echo $response['xpub'];

} catch (\Tatum\Sdk\ApiException $apiExc) {
    header('Content-Type: application/json');
    $errorResponse = [
        'status' => 'error',
        'error' => [
            'type' => 'APIException',
            'message' => sprintf("API Exception when calling api()->harmony()->oneGenerateWallet(): %s", var_export($apiExc->getResponseObject(), true))
        ]
    ];
    echo json_encode($errorResponse);

} catch (\Exception $exc) {
    header('Content-Type: application/json');
    $errorResponse = [
        'status' => 'error',
        'error' => [
            'type' => 'Exception',
            'message' => sprintf("Exception when calling api()->harmony()->oneGenerateWallet(): %s", $exc->getMessage())
        ]
    ];
    echo json_encode($errorResponse);
}