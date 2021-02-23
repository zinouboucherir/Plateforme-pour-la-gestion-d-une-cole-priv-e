<?php
namespace app\models;
require_once('DataBase.php');
class UserManager
{
    public function getUser($username,$pswd,$type)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT * FROM utilisateurs WHERE login = ? and password = ? and type = ?");
            $requete->execute([$username,md5($pswd),$type]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }

}
