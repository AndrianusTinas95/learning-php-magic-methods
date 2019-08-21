<?php 

class CBA{
    public function __construct($data=null,$massage=null)
    {
        echo 'from '. __CLASS__ . ' in method ' . __METHOD__;
        echo "<br>";
        echo $data != null ? $data : $massage;
    }

    public function create(){
        // 
    }

    public function update(){
        // 
    }
}