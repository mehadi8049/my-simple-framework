<?php
class Router {
  public static $get_routes;
  public static $post_routes;
  public static function get($url, $con_fuction) {
    self::$get_routes[$url] = $con_fuction;
  }

  public static function run_get ($url, $get=array()) {
    if (array_key_exists($url, self::$get_routes)) {
       $con_fuction=self::$get_routes[$url];
       $con_fuction=explode('@', $con_fuction);
       $controller_obj=new $con_fuction[0]();
       return $controller_obj->{$con_fuction[1]}($get);
    }else {
      
      include 'resource/404.php';
    }
  }
  

  public static function post($url, $con_fuction) {
    self::$post_routes[$url] = $con_fuction;
  }
  public static function run_post ($url, $post=array()) {
    if (array_key_exists($url, self::$post_routes)) {
       $con_fuction=self::$post_routes[$url];
       $con_fuction=explode('@', $con_fuction);
       $controller_obj=new $con_fuction[0]();
       return $controller_obj->{$con_fuction[1]}($post);
    }else {
      include 'resource/404.php';
    }
  }
}