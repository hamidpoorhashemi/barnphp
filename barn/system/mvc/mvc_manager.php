<?php
/**
 *
 */
class Mvc_manager
{
// ************************
  function __construct()
  {

    $this->Load_rout_controller();
  }
  // *****************
  public function Load_rout_controller(){
        $router =new router;
          $rout=$router->get_rout();
          $controller_dir=DEFUALT_CONTROLLER_ROUT;
          $controller_file_name=$rout;
              if(file_exists($controller_dir.$controller_file_name.".php")){
                include_once($controller_dir.$controller_file_name.".php");
				$routArray=explode('/', $controller_file_name);
				$className=array_pop($routArray);
                $new_controller = new $className;
              }else{
                include_once($controller_dir."default/"."404.php");
              }
  }
  // **********************
  public function Load_view($name,$data){
    $log = new Log;
    $viewFileRout=DEFUALT_VIEW_ROUT.$name.'.php';
    if(file_exists($viewFileRout)){
    include_once($viewFileRout);
    }else{
      $log->show(array("logType"=>"Fatal","message"=>"View file not exist in ". $viewFileRout . " Directory! "));
    }
  }
  // **********************
}
