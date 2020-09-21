<?php

class mysqlPDO extends PDO {
  public function __construct() {
    $drv = 'mysql';
    $hst = 'sql7.freesqldatabase.com';
    $usr = 'sql7366754';
    $pwd = 'QeyiLnWZcb';
    $sch = 'sql7366754';
    $dsn = $drv . ':host=' . $hst . ';dbname=' . $sch;
  parent::__construct($dsn,$usr,$pwd);
  }
}
    $db = new mysqlPDO();

?>