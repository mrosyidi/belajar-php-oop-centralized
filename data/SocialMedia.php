<?php
  class SocialMedia
  {
    public string $name;
  }

  class Facebook extends SocialMedia
  {
    final public function login(string $username, string $password)
    {
      return true;
    }
  }

  class FakeFacebook extends Facebook
  {
    // error
    // public function login(string $username, string $password): bool
    // {
    //   return false;
    // }
  }
