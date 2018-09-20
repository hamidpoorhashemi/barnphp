<?php
/**
 *
 */
class Input
{

  function __construct()
  {
  }
  // *************************
  public function get($name){
    $res=null;
    if(!is_null($_GET)  && count($_GET) > 0){
          if(array_key_exists($name,$_GET)){
                    $res= $_GET[$name];
                  }
      }
      return $res;
  }
  // ************************
  public function post($name){
    $res=null;
    if(!is_null($_POST)  && count($_POST) > 0){
          if(array_key_exists($name,$_POST)){
                    $res= $_POST[$name];
                  }
      }
      return $res;
  }
}
