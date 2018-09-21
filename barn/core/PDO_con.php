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
    $servername = "localhost";
    $dbname="admin_barnphp";
    $username = "root";
    $password = "";
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
