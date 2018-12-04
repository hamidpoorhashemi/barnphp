<?php
/**
 *
 */
class Log
{
// ************************
  function __construct($data=array())
  {
    

  }

  function show($data=array()){
  $logType=(array_key_exists("logType",$data))? $data['logType'] : "";
  $this->add($data);
  if($logType=="Fatal"){
    var_dump($data);
    die("<h3  style='color:red'>Fatal Error !</h3>");
  }elseif($logType=="Warning"){
    var_dump($data);
    echo "<h4 style='color:brown'>Fatal Error !</h4>";
  }else{
    // This is notic or nothing log
  }
}

 function add($data){
   
  if(!DEFAULT_CONFIG['log_save_enable'])
  return false;

        $indicesServer = array('PHP_SELF', 
      'argv', 
      'argc', 
      'GATEWAY_INTERFACE', 
      'SERVER_ADDR', 
      'SERVER_NAME', 
      'SERVER_SOFTWARE', 
      'SERVER_PROTOCOL', 
      'REQUEST_METHOD', 
      'REQUEST_TIME', 
      'REQUEST_TIME_FLOAT', 
      'QUERY_STRING', 
      'DOCUMENT_ROOT', 
      'HTTP_ACCEPT', 
      'HTTP_ACCEPT_CHARSET', 
      'HTTP_ACCEPT_ENCODING', 
      'HTTP_ACCEPT_LANGUAGE', 
      'HTTP_CONNECTION', 
      'HTTP_HOST', 
      'HTTP_REFERER', 
      'HTTP_USER_AGENT', 
      'HTTPS', 
      'REMOTE_ADDR', 
      'REMOTE_HOST', 
      'REMOTE_PORT', 
      'REMOTE_USER', 
      'REDIRECT_REMOTE_USER', 
      'SCRIPT_FILENAME', 
      'SERVER_ADMIN', 
      'SERVER_PORT', 
      'SERVER_SIGNATURE', 
      'PATH_TRANSLATED', 
      'SCRIPT_NAME', 
      'REQUEST_URI', 
      'PHP_AUTH_DIGEST', 
      'PHP_AUTH_USER', 
      'PHP_AUTH_PW', 
      'AUTH_TYPE', 
      'PATH_INFO', 
      'ORIG_PATH_INFO') ; 
      $serverData="";
      foreach ($indicesServer as $arg) { 
          if (isset($_SERVER[$arg])) { 
            $serverData.=$arg.' ===> ' . $_SERVER[$arg] . "\r\n"  ; 
          } 
          else { 
            $serverData.=$arg. "\r\n" ; 
          } 
      } 
        $log  = "---------------------------------".PHP_EOL.
              "-------------START------------".PHP_EOL.
              "Date: ".date("F j, Y, g:i a").PHP_EOL.
              "Attempt: ".(implode("--",$data)).PHP_EOL.
              "-------SERVER-------".PHP_EOL.
              $serverData." ".PHP_EOL.
              "-------------------------".PHP_EOL.
              "------------END-------------".PHP_EOL.
              "-------------------------------------".PHP_EOL;
      //Save string to log, use FILE_APPEND to append.
      file_put_contents('./logs/log_'.date("FjYHi").'.log', $log, FILE_APPEND);
      }

}