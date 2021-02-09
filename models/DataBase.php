<?php
namespace app\models;
class DataBase
{
    protected static $db;

    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$db == null)
        {
            self::$db =new \PDO('mysql:host=localhost;dbname=projet_web','root','');
        }
        return self::$db;
    }
    public function close()
    {
        self::$db->close();
    }
}  
