<?php
/**
 *
 */
class Barn_Controller
{
  function __construct()
  {
        $this->Set_page_title();
  }
  public function Set_page_title($title=DEFUALT_NAME){
    $title_tag = "<title>";
    $title_tag .= $title;
    $title_tag .= "</title>";
    echo $title_tag;
  }
}
