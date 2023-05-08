<?php
  class ValidationUtil
  {
    static function validate(LoginRequest $request)
    {
      if(!isset($request->username))
      {
        throw new ValidationException("username is not set");
      }else if(!(isset($request->password)))
      {
        throw new ValidationException("password is not set");
      }else if(is_null($request->username))
      {
        throw new ValidationException("username is null");
      }else if(is_null($request->password))
      {
        throw new ValidationException("password is null");
      }
    }
  }
