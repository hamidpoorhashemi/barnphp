<?php
/**
 *
 */
class Model_page extends Barn_Model
{
  function __construct()
  {
    Parent::__construct();
  }
  public function get_page_title(){
    $user=$this->select_all('b_user');


  }
}
