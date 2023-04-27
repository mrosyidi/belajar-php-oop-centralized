<?php
  require_once "data/Person.php";

  $eko = new Person();
  $eko->name = "Eko";
  $eko->sayHello("Budi");

  $joko = new Person();
  $joko->name = "Joko";
  $joko->sayHello(null);

  $eko->info();
  $joko->info();
