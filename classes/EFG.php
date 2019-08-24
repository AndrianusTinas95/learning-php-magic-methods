<?php

class EFG{
    
    private $arr = [
        'name'=>'tinas',
        'age'=>23
    ];

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

    /**
     * this is function __callStatic
     * for call using static function
     */
    public static function __callStatic($name, $arguments)
    {
        echo "coba panggil $name dengan ";
        print_r($arguments);
    }

    /**
     * this is function __isset
     * for check exists value
     * return bolean 
     */
    public function __isset($name)
    {
        if(isset($this->arr[$name])){
            return TRUE;
        }else {
            return FALSE;
        }
    }
}