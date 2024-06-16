<?php

class Config
{

  public static function dbh()
  {
    if (!defined('DB_HOST') ) {
      define("DB_HOST", "localhost");
  }
  if (!defined('DB_NAME') ) {
    define("DB_NAME", "certichain");
}
if (!defined('DB_USER') ) {
  define("DB_USER", "root");
}
if (!defined('DB_PASS') ) {
  define("DB_PASS", "");
}
   
   
    
  
    return $dbh = new PDO('mysql:host=localhost;dbname=certichain', 'root', '');
  }




}
?>