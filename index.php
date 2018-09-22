<?php
defined("HOME_ROUT")? null : define("HOME_ROUT", "home");

//*********************
defined("BARN__DIR")? null : define("BARN__DIR", "barn/");
defined("DEFUALT_NAME")? null : define("DEFUALT_NAME", "BARN APP");
defined("DEFUALT_CONTROLLER_ROUT")? null : define("DEFUALT_CONTROLLER_ROUT", "controller/");
defined("ASSETS_DIR")? null : define("ASSETS_DIR", "file/assets/");

defined("DEFUALT_VIEW_ROUT")? null : define("DEFUALT_VIEW_ROUT", "view/");
defined("DEFUALT_TEMPLATE_ROUT")? null : define("DEFUALT_TEMPLATE_ROUT", "template/");
defined("DEFUALT_TEMPLATE_FRONT_BARN")? null : define("DEFUALT_TEMPLATE_FRONT_BARN", "front_barn/");
defined("DEFUALT_TEMPLATE_ADMIN_BARN")? null : define("DEFUALT_TEMPLATE_ADMIN_BARN", "admin_barn/");
//********** You  can set Compiling mode to Release Or Debag Mode  **********
define("BARN__COMPILING_MODE","Debug");
// **************
include_once(BARN__DIR.'system/fly.php');
// **************
