<?php
/**
 *
 */
class Barn_Controller
{
  function __construct()
  {
    
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
