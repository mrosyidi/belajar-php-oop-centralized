<?php
  require_once "data/LoginRequest.php";
  require_once "exception/ValidationException.php";
  require_once "helper/ValidationUtil.php";

  $request = new LoginRequest();
  $request->username = "eko";
  $request->password = "eko";
  
  ValidationUtil::validate($request);
