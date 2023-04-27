<?php
  class Person
  {
    const AUTHOR = "Programmer Zaman Now";
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(?string $name)
    {
      if(is_null($name)){
        echo "Hi, my name is $this->name" . PHP_EOL;
      }else{
        echo "Hello $name, my name is $this->name" . PHP_EOL;
      }
    }

    function info()
    {
      echo "Author : " . self::AUTHOR . PHP_EOL;
    }
  }
