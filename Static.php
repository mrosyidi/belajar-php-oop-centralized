<?php
  require_once "helper/MathHelper.php";

  use Helper\MathHelper;

  echo MathHelper::$name . PHP_EOL;
  MathHelper::$name = "Eko Kurniawan";
  echo MathHelper::$name . PHP_EOL;
