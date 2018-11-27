<?php
/**
 *@author Hamid Pourhashemi
 */
class Login extends Barn_Controller
{
// ***************************
  function __construct()
  {
      Parent::__construct();
	  $data=$this->dataProvider();
      $this->loadPage($data);
  }
 //***************************
// ***************************
          public function loadPage($data=array()){
              $model_page=new model_page;
              $data['page_title']=$model_page->get_page_title();
              $this->template_fBarn('home',$data);
          }
// ***************************
public function dataProvider(){

return array();
}
//****************************
//********End of class
}
