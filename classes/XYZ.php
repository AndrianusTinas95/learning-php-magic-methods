<?php

class XYZ{
    public $data = 'data from xyz';
    private $arr = [
        'name'=>'tinas',
        'age'=>23
    ];

    public function __construct()
    {
        // 
    }
    /**
     * this is __get function
     * untuk mengambil prroperti yang lain yang
     * tidak ada di class ini
     */
    public function __get($name)
    {
        // echo "get property $name";
        if(array_key_exists($name,$this->arr)){
            return $this->arr[$name];
        }else{
            return "trying to access non-existing variable: $name";
        }
    }
    /**
     * this is __set function
     */
    public function __set($name,$value){
        if(array_key_exists($name,$this->arr)){
            return $this->arr['name'] =  $value;
        }else{
            echo "not set name $name and value $value";
        }

    }

    
}