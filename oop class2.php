<?php
class Animal{
    public $name;
    public $age;

    public function_connstruct($name,$age){
        $this->name =$name;
        $this->age =$age;
    }
    public function show(){
        echo $this->name;
    }
}

class Dog Extend Animal{
    public function dedtails(){
        echo "My dog name is".$this->name . "end his age is". $this ->age;
    }
}
$animal =new Animal("foxy",4);
$dog =new Dog("tommy",3);
$dog->dedtails();
?>