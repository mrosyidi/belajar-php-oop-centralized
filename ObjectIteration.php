<?php
  class Data implements IteratorAggregate
  {
    var string $first = "First";
    public string $second = "Second";
    public string $third = "Third";
    protected string $fourth = "Fourth";

    public function getIterator()
    {
      yield "first" => $this->first;
      yield "second" => $this->second;
      yield "third" => $this->third;
      yield "fourth" => $this->fourth;
    }
  }

  $data = new Data();

  foreach($data as $property => $value)
  {
    echo "$property : $value" . PHP_EOL;
  }
