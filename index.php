<?php

function __autoload($class)
{
    include_once(__DIR__ . "/classes/$class.php");
}

$cba = new CBA(null,'this is message');
