<?php
  namespace Data;

  interface HasBrand
  {
    function getBrand(): string;
  }

  interface IsMaintanance
  {
    function isMaintanance(): bool;
  }

  interface Car extends HasBrand
  {
    function drive(): void;
    function getTire(): int;
  }

  class Avanza implements Car, IsMaintanance
  {
    function drive(): void
    {
      echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int
    {
      return 4;
    }

    function getBrand(): string
    {
      return "Toyota";
    }

    function isMaintanance(): bool
    {
      return false;
    }
  }
