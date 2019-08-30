<?php

function __autoload($class)
{
    include_once(__DIR__ . "/classes/$class.php");
}

$efg = new EFG();
/** 
$a = "ini isi variabel a";
// $b = $a;
$b = & $a;
$b = "ini isi variabel b";
echo $a;
*/
$a = new EFG();
// $a->subObject = new stdClass();
$a->tes = 'ini property tes dari a';

$b = $a;
$b->tes = ' ini property tes dari b';

echo "<pre>";
print_r($a);
echo "</pre>";


