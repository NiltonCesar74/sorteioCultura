<?php
class Database
{
  private static $instance = null;

  private function __construct()
  {
  }

  public static function getInstance()
  {
    try {
      if (!isset(self::$instance) || self::$instance == null) {
        self::$instance = new \PDO('mysql:host=127.0.0.1; dbname=test', 'root', '', [
          \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
          \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]);
      }
      return self::$instance;
    } catch (\PDOException $e) {
      $output = "<h5 style='text-align:center; color: #721c24; background-color: #f8d7da; border-color: #f5c6cb;position: relative; padding: .75rem 1.25rem; margin-bottom: 1rem;border: 1px solid transparent;border-radius: .25rem;'>";
      $output .= $e->getMessage()."</h5>";
      exit($output);
    }
  }
}
