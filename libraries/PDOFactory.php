<?php

  class PDOFactory
  {
    public static function getMysqlConnection()
    {
      $db = new PDO('mysql:host=localhost;dbname=JEUX', 'vagrant', '123');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->exec("SET NAMES 'utf8';");

      return $db;
    }
  }
