<?php
  namespace Data;

  interface Car
  {
    function drive(): void;
    function getTire(): int;
  }
