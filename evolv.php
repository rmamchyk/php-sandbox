<?php

use Evolv\EvolvClient;

require_once __DIR__ . '/vendor/autoload.php';

$environment = '7f4099bfbc';
$uid = 'user_id';
$endpoint = 'https://participants-stg.evolv.ai/';

$client = new EvolvClient($environment, $endpoint);
$client->initialize($uid);

?>