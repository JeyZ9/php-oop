<?php
class Address {

    // private $id;
    private $street;
    private $city;
    private $state;
    private $postalCode;

    public function __construct($street, $city, $state, $postalCode) {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = $postalCode;
    }

    // public function getId(){
    //     $this->id;
    // }

    public function getStreet(){
        $this->street;
    }

    public function getCity(){
        $this->city;
    }

    public function getState(){
        $this->state;
    }

    public function getPostalCode(){
        $this->postalCode;
    }

    // public function setId($id){
    //     $this->id = $id;
    // }

    public function setStreet($street){
        $this->street = $street;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function setState($state){
        $this->state = $state;
    }

    public function setPostalCode($postalCode){
        $this->postalCode = $postalCode;
    }

    public function __toString() {
        return $this->street . ', ' . $this->city . ', ' . $this->state . ', ' . $this->postalCode;
    }
}

?>