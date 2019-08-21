<?php

class EFG{
    public function create(){

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
}