<?php
class Staff implements ArrayAccess {

  public function __construct()
  {

  }

  public function offsetExists($val)
  {
    return isset($this->{$val});
  }

  public function offsetSet($key,$value)
  {
     $this->{$key} = $value;
  }

  public function offsetGet($key)
  {
    return $this->{$key};
  }

  public function offsetUnset($key)
  {
    unset($this->{$key});
  }

}


$temp = [];
foreach (explode(',','Manoj,Rohan,Gaurav,Sandeep,Sumit') as $key => $name) {
  $obj = new Staff();
  $obj->name = $name;
  $temp[$key] = $obj;
}
