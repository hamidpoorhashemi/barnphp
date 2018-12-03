<?php
/**
 *
 */
class PDO_con
{
  function __construct()
  {

  }
// ************************
  public function connect(){
    $servername = DEFAULT_CONFIG['server_name'];
    $dbname=DEFAULT_CONFIG['db_name'];
    $username = DEFAULT_CONFIG['db_user'];;
    $password = DEFAULT_CONFIG['db_password'];;
      try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            return false;
        }
  }
  // *********************
}

?>
