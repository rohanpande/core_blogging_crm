<?php

class Request implements ArrayAccess {

  public $_post    = [];
  public $_get     = [];
  public $_request = [];


  public function __construct()
  {

  }

  public function createFromGlobals()
  {

  }

  public function data()
  {
    return $this->_post;
  }

  public function getClientIp()
  {
    return $_SERVER['REMOTE_ADDR'];
  }

  public function getHost()
  {
    return $_SERVER['HOST'];
  }

  public function domain()
  {
    return $_SERVER['DOMAIN'];
  }

  public function referer()
  {
    return $_SERVER['REQUEST_URI'];
  }

  public function params()
  {
    return $_SERVER['QUERY_STRING'];
  }

  public function method()
  {
    return $_SERVER['REQUEST_METHOD'];
  }

  public function is($name)
  {
    return $_SERVER['REQUEST_METHOD'] === $name;
  }

  public function offsetExists($offset)
  {
      return isset($this->{$offset});
  }

  public function offsetGet($offset)
  {
      if ($this->offsetExists($offset)) {
        return $this->{$offset};
      }

      return null;
  }

  public function offsetSet($offset,$value)
  {
    $this->{$offset} = $value;
  }

  public function offsetUnset($offset)
  {
    unset($this->{$offset});
  }

}
