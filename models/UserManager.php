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
    public function getAllInfos($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT users.* FROM utilisateurs join users on users.id =utilisateurs.id where users.id=?");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
}
