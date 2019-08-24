<?php

function __autoload($class)
{
    include_once(__DIR__ . "/classes/$class.php");
}

// $efg = new EFG();
// $efg->update('ok lo ko','nanas');

EFG::mantul('ok');