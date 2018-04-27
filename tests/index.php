<?php

include "../vendor/autoload.php";

use Crystal\Crystal;

$crystal = new Crystal();
$crystal->setPkToken('pk_QYtCIUFVrv4WRjehFjvg0HuIHNhJirnplm9g1R3ZyqbyZT7Wkyr1nUsA4');
$crystal->setSkToken('sk_xPYSp4IKVTEfYE6zcHXQ9sHpapW8KxRrWnTUp9JeYJHQhOf404GVYdPMs');

echo "<pre>";
print_r($crystal->retrieveClient(1));
echo "</pre>";