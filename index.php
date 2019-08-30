<?php

function __autoload($class)
{
    include_once(__DIR__ . "/classes/$class.php");
}

$efg = new EFG();
// $efg->update('ok lo ko','nanas');
var_dump($efg->arr);
unset($efg->name);
echo "<br>";
var_dump($efg->arr);