<?php

function __autoload($class)
{
    include_once(__DIR__ . "/classes/$class.php");
}

$cba = new CBA();
$xys =new XYZ();
