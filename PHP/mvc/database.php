<?php
class DB
{
    private static $db = NULl;

    public static function getConnection() {
      if (!isset(self::$db)) {
        try {
          self::$db = new PDO('mysql:host=localhost;dbname=MVC_DB', 'root', '');
          self::$db->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$db;
    }
    
}
?>