<?php
#namespace Core\Configure;

class Configure {

  public static $config = [];
  public static $extension = '.php';

  public static function write($name,$value) {
    static::$config[$name] = $value;
  }

  public static function read($name) {
    return static::$config[$name];
  }

  public static function load($path) {
    return static::$config = include CONFIG. DS. $path. self::$extension;
  }

  public static function delete($name) {
    unset(static::$config[$name]);
  }

  public static function destroy() {
    static::$config = [];
  }

}
