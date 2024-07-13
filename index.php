<?php

include 'testing.php'; 
include 'hwawei.php';
include 'samsung.php';
include 'sony.php';
include 'ApplePc.php';
include 'AppleTablet.php';


use testing\Testing as T;   //use namespace\className


$sony = new sony\CreatePhone();
$sony->myFunction();

echo '<br>';

$hwawei = new hwawei\CreatePhone();
$hwawei->myFunction();

echo'<br>';

$samsung = new samsung\CreatePhone();
$samsung->myFunction();

echo'<br>';

$testing= new T();
$testing->myFunction();

echo'<br>';

$apple1 = new Apple\Hardware\Pc\Create();
$apple1->sayHello();

echo 'br';
$apple2 = new Apple\Hardware\Tablet\create();
$apple2->sayHello();







