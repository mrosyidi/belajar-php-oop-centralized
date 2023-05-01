<?php
  class Data
  {
    var string $first = "First";
    public string $second = "Second";
    public string $third = "Third";
    protected string $fourth = "Fourth";
  }

  $data = new Data();

  foreach($data as $property => $value)
  {
    echo "$property : $value" . PHP_EOL;
  }
