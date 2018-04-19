<?php

include "vendor/autoload.php";

use Crystal\Request\Request;

$crystal = new Request();
$crystal->setPkToken('pk_Oxu4eCFnRwgMDVqgNgxPjOlAaKZHoc9bSCWasP8OTTz6ASzSQ0U5b0PTV');
$crystal->setSkToken('sk_3SZw5gNL3lbYIbZYNXf1absWIzxS98ZNFtDVNjDwPkbkXHWyWAzmYqsmq');

echo "<pre>";
print_r($crystal->getClients());
echo "</pre>";