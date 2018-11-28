<?php
/**
 *@author Hamid Pourhashemi
 */
class Setup extends Barn_Controller
{
// ***************************
  function __construct()
  {
      Parent::__construct();
      $this->load_page();
  }
// ***************************
          public function load_page(){
              $data=array();
              $model_page=new model_page;
              $data['page_title']="Setup information";
              mvc_manager::Load_view('wizard/setup',$data);
          }
// ***************************
}
