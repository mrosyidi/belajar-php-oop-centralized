<?php
  require_once "exception/ValidationException.php";
  require_once "data/LoginRequest.php";
  require_once "helper/Validation.php";

  $loginRequest = new LoginRequest();
  $loginRequest->username = "eko";
  $loginRequest->password = "eko";
  validateLoginRequest($loginRequest);
  echo "VALID" . PHP_EOL;
