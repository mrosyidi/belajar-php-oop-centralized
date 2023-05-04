<?php
  class Zero
  {
    private array $properties = [];

    public function __get($name)
    {
      return $this->properties[$name];
    }

    public function __set($name, $value)
    {
      $this->properties[$name] = $name;
    }

    public function __isset($name): bool
    {
      return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
      unset($this->properties[$name]);
    }
  }

  $zero = new Zero();
  $zero->firstName = "Eko";
  $zero->middleName = "Kurniawan";
  $zero->lastName = "Khannedy";
  echo "First Name : $zero->firstName" . PHP_EOL;
  echo "Middle Name : $zero->middleName" . PHP_EOL;
  echo "Last Name : $zero->lastName" . PHP_EOL;
