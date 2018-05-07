<?php
/**
 * Created by PhpStorm.
 * User: Sayeed
 * Date: 07-May-18
 * Time: 12:50 AM
 */

include 'FbBot.php';

$tokken = $_REQUEST['hub_verify_token'];
$hubVerifyToken = 'cloudwaysschool';
$challange = $_REQUEST['hub_challenge'];
$accessToken = 'EAAPKH1OtrVEBAKn4KZBG4HFGZCJMc2qpQv5brH0p8e8DZBFuTmCCY7tQbONt9jZCvIBNPrP4u48OgJ6I0p04htobJZCKVQXXRxDZCOQh6n80MyEIxJZBzrGjqpuOmghQosY0zuqQvZCNnvMoNPYG2VJhObca4302RkY6dzMDRh8ZAZCQZDZD';
$bot = new FbBot();
$bot->setHubVerifyToken($hubVerifyToken);
$bot->setaccessToken($accessToken);
$bot->verifyTokken($tokken, $challange);
$message = $bot->readMessage($input);
$botmessage = $bot->sendMessage($message);

if($messageText == 'hi') {
    $answer = "Hello! How may I help you today ";
    $response = [
        'recipient' => [ 'id' => $senderId ],
        'message' => [ 'text' => $answer ],
        'access_token' => $this->accessToken
    ]
    ;}