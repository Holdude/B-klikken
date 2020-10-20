<?php

class mysqlPDO extends PDO {
  /*
  public function __construct() {
    $drv = 'mysql';
    $hst = 'localhost';
    $usr = 'u789294173_bklikk';
    $pwd = 'Mordi69420';
    $sch = 'u789294173_bklikkenDB';
    $dsn = $drv . ':host=' . $hst . ';dbname=' . $sch;
  parent::__construct($dsn,$usr,$pwd);
  
  }
*/
  public function __construct() {
    $drv = 'mysql';
    $hst = 'localhost';
    $usr = 'root';
    $pwd = '';
    $sch = 'u789294173_bklikkenDB';
    $dsn = $drv . ':host=' . $hst . ';dbname=' . $sch;
  parent::__construct($dsn,$usr,$pwd);
  }
}
    $db = new mysqlPDO();

?>