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
    $page=$input->get('page');
    return $page;
  }

}
