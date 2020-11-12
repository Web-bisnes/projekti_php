<?php
//Muutettu GitHubissa.
include('../../tunnukset.php');
define('DB_DATABASE','puutarha');
define('DB_PASSWORD',$password);
define('DB_USER',$user);
define('DB_SERVER',$server);

function db_connect() {
static $result;
if (!isset($result) or empty($result)){
   $result = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
   if (!$result) {
      throw new Exception('Could not connect to database server');
      } 
   else {
      return $result;
      }
   }
return $result;
}

?>
