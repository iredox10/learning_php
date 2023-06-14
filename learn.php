<?php

use JetBrains\PhpStorm\Language;

class Person{
    protected $name;
    protected $age;

    public function __construct($name,$age=0){
        $this->name = $name;
        $this->age = $age;
    }

    function get_name() {
        return $this->name;
    }
}

$per1 = new Person('idris',44);

class Developer extends Person{
    private $type;
    private $language;

    public function __construct($name,$age=0,$type,$language)
    {
        parent::__construct($name,$age);
        $this->type = $type;
        $this->language = $language;
        
    }
    public function get_detail(){
        return $this->name . ' is using ' . $this->language;
    }


}

$dev1 = new Developer('idris',44,'mobile','java');

echo $dev1->get_detail();
// echo $dev1->();

?>