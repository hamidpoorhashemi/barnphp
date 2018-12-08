<?php
/**
 *
 */

class Barn_Controller
{
  public $baseInfo;
  function __construct()
  {

    $this->baseInfo['Links']['root']="http://localhost:8080/barnphp/";
    $this->baseInfo['Links']['home']="";
    $this->baseInfo['Links']['files']="";
    $this->baseInfo['Links']['log']="";
    $this->baseInfo['Links']['install']=$this->baseInfo['Links']['root']."wizard/install";
  }
  // ******************
  public function Set_page_title($title=DEFUALT_NAME){
    $title_tag = "<title>";
    $title_tag .= $title;
    $title_tag .= "</title>";
    return  $title_tag;
  }
  // *************************
  public function template_fBarn($name='404',$data=array()){
    mvc_manager::Load_view(DEFUALT_TEMPLATE_ROUT.DEFUALT_TEMPLATE_FRONT_BARN."header",$data);
    mvc_manager::Load_view($name,$data);
    mvc_manager::Load_view(DEFUALT_TEMPLATE_ROUT.DEFUALT_TEMPLATE_FRONT_BARN."footer",$data);
  }
  // *************************
}
