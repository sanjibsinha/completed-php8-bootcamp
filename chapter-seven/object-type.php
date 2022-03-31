<?php

class SpecialPerson {
    // Properties
    
    public $name;
  
    // Methods
    function displayName(string $name) {
      $this->name = $name;
      echo($name);
    }
    
}

$person = new SpecialPerson;

//$person->displayName('John Smith');

$person->displayName(10);

// John Smith