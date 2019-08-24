<?php

class EFG{
    public function create(){
        echo "this is " . __METHOD__;
        echo "<br>";
        echo "kesini pulak kan"; 
    }

    /**
     * this is call function
     * to get another function not exsis 
     * in this class
     */
    public function __call($name,$arr){
        echo "You trying call $name, with following parameters : ";
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "coba panggil $name dengan ";
        print_r($arguments);
    }
}