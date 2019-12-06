<?php
class Person{
    private $name;
    private $email;
    private static $agelimit = 100;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__.' Created <br>';
    }

    public function __destruct(){
        echo __CLASS__.' Destroyed <br>';
    }

    public function getName(){
        return $this->name.'<br>';
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getEmail(){
        return $this->email.'<br>';
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public static function getAgeLimit(){
        return self::$agelimit;
    }
}

// $person1 = new Person('John Doe', 'jdoe@gmail.com');

// // $person1->setName('John Doe');

// echo $person1->getname();

class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->balance.'<br>';
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }
}

$customer1 = new Customer('John Doe', 'jdoe@test.com', 300);

echo $customer1->getBalance();
echo $customer1->getEmail();

echo Person::getAgeLimit();