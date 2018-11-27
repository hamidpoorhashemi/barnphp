<?php
/**
 *
 */
class Router
{

  function __construct()
  {

  }

  public function get_rout(){
    $input=new Input;
    $page=$input->get('path');
    if($page===null){
      $page=HOME_ROUT;
    }
    return $page;
  }

}
