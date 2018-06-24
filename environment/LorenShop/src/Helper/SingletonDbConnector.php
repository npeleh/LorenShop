<?php

namespace LorenShop\Helper;

final class SingletonDbConnector
 {

  private static $dbInstance;
  
  private function __construct()
  {

  }

  public static function connect()
  {
    if (self::$dbInstance === null) {
      self::$dbInstance = new \PDO("dblib:host=VM-WS2KC-BC2018.edvantis.com;dbname=echo",  "echo", "4esZXdr5@echo");
      
        // dsn: 'mysql:host=192.168.33.10'; dbname:  . DB_NAME, DB_USER, DB_PASS);
    }
 
    return self::$dbInstance;
  }
}
?>











