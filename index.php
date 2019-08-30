<?php

function __autoload($class)
{
    include_once(__DIR__ . "/classes/$class.php");
}

$efg = new EFG();

echo($efg);