<?php
/**
 *@author Hamid Pourhashemi
 */
class Install extends Barn_Controller
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
              $logInstallation=array("Start preparing report of installation");
              $data['page_title']="Install Check";
              $this->installBarn();              
              mvc_manager::Load_view('wizard/install',$data);
          }
// ***************************
private function installBarn(){
    $installer=new installer;
     
}
// *************
}
