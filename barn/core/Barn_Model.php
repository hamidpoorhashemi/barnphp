<?php
 /**
 *
 */
class Barn_Model
{
private $con;
  function __construct()
  {

  }

// ******************
public function select_all($tbl){
  $PDO_con = new PDO_con;
  $conn=$PDO_con->connect();
  $stmt = $conn->prepare("select * from ".$tbl." WHERE 1");
  $result = $stmt->execute();
  $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
     if(count($result) > 0) {
       return $result;
     }else{
       return false;
     }
}




}
