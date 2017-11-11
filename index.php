<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sight IT</title>
</head>

<body>
    <h1>Welcome to Sight IT bot</h1>
</body>

</html>
<?php
if(isset($_REQUEST['hub_challenge'])){
    $challenge = $_REQUEST['hub_challenge'];
    $token = $_REQUEST['hub_verify_token'];

    if($token == "developercircles"){
        echo $challenge;
    }
}
?>