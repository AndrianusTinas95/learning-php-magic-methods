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
    public function __get($name)
    {
        if(property_exists($this,$name)){
            return $this->$name;
        }
        return "You Try Call : $name";
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

    /**
     * method __unset()
     * for unset something
     */
    public function __unset($name)
    {
        unset($this->arr[$name]);
    }

    /**
     * method __toString()
     * for convert to string 
     */
    public function __toString()
    {
        return get_class($this);
    }

    public function __sleep()
    {
        // $db->disconnect();
    }

    public function __wakeup()
    {
        // $db->connect();
    }

    /**
     * this method invoke
     */
    public function __invoke($a,$b,$c=[])
    {
        echo "you are call $a and $b using invoke.<br>";
        $c=[$a=>$b];
        var_dump($this->arr);
        echo "<br>";
        array_push($this->arr,$c);
        var_dump($this->arr);
    }
}