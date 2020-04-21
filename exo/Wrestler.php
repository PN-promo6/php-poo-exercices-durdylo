<?php

namespace exo;

class Wrestler
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function sayHello()
    {
        echo "My name is " . $this->firstName . " " . $this->lastName;
    }
}
// $youngBucks1 = new Wrestler("Matt", "Jackson");
// $youngBucks1->sayHello();
