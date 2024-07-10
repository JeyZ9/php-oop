<?php

class Person {
    private $id;
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getId(){
        $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function __toString() {
        return 'Name: ' . $this->name . ', Age: ' . $this->age . ', Address: ' . $this->address;
    }
}
