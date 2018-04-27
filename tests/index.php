<?php

include "../vendor/autoload.php";

use Crystal\Crystal;

$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

echo "<pre>";
print_r($crystal->retrieveAllClients());
//print_r($crystal->retrieveClient(1));
echo "</pre>";