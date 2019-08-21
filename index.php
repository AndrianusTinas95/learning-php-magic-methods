<?php

function __autoload($class)
{
    include_once(__DIR__ . "/classes/$class.php");
}

// $cba = new CBA(null,'this is message');
// echo '<br><br>';
// echo $cba->data;
// echo '<br><br>';

$xyz = new XYZ(); 
$xyz->name='Tintin';
echo $xyz->name;
// $xyz->status = 'Single';
// echo "<br>".$xyz->status;