<?php

use Evolv\EvolvClient;

require __DIR__ . '/vendor/autoload.php';

$environment = '7f4099bfbc';
$uid = 'user_id';
$endpoint = 'https://participants-stg.evolv.ai/';

$client = new EvolvClient($environment, $endpoint);
$client->initialize($uid);

$client->context->set('native.newUser', true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sandbox</title>
</head>
<body>
    <p>Hello World</p>

    <?php
        $client->get("home.cta_text", function ($value) {
            $btnTitle = empty($value) ? "Learn More" : $value;
            echo '<p>' . $btnTitle . '</p>';
        });

        $client->context->set('native.pageCategory','home');
    ?>
</body>
</html>