<?php

require_once __DIR__.'/../vendor/autoload.php';
USE App\Wcs\Hello;

$sayHello = new Hello();
echo $sayHello->talk();
echo '<br>';

USE HelloWorld\SayHello;
echo SayHello::world();