<?php 

class CBA{
    public $data = 'Data from CBA class';
    /**
     * this is __constract function
     */
    public function __construct($data=null,$massage=null)
    {
        echo 'from '. __CLASS__ . ' in method ' . __METHOD__;
        echo "<br>";
        echo $data != null ? $data : $massage;
        echo "<br>first eksekusi";
    }

    /**
     * this is __destruct function
     */
    public function __destruct()
    {
        echo "<br>"."from " . __METHOD__;
        echo "<br>last eksekusi";
    }


    public function create(){
        // 
    }

    public function update(){
        // 
    }
}