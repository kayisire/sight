<?php
$accessToken = 'EAAHsgREoySkBAIgCvPIjZCkFB4HMpoVhH2hqLHzCF87iv3VmSK4zTabqn2gfuwRQTZAl9FsAbqltubhOBHfRXM0kuBKzMtoj0JefjQ4vK3sdJ8KHCH2a72b6BYIf0WhrKSwcQhEwjU5lCTMFebCRDlzN8PZCyC9NyerCIs61gZDZD';

if(isset($_REQUEST['hub_challenge'])){
    $challenge = $_REQUEST['hub_challenge'];
    $token = $_REQUEST['hub_verify_token'];
}

if($token == "developercircles"){
    echo $challenge;
    die();
}

if(file_get_contents('php://input')){
    $input = json_decode(file_get_contents('php://input'));
    
    $userID = $input['entry'][0]['messaging'][0]['sender']['id'];
    $message = $input['entry'][0]['messaging'][0]['sender']['text'];
    
    echo $userID." said ".$message;
    
    $url ='https://graph.facebook.com/2.6/me/message?access_token=$accessToken';
    
    $jsonData = "{
        'recipient': {
            'id': $userId
        },
        'message': {
            'text': 'hello there, welcome to Sight It!'
        }
    }";
    
    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    
    if(!empty($input['entry'][0]['messaging'][0]['message'])){
        curl_exec($ch);
    }
}