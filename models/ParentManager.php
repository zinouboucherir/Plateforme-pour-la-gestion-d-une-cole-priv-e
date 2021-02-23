<?php
namespace app\models;
require_once('DataBase.php');
class ParentManager
{
    public function getParentInfos($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT * FROM users join utilisateurs  on users.id = utilisateurs.id  where users.id=?");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }
    public function getNotes($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT * FROM parenteleve join notes JOIN users on parenteleve.id=notes.eleve_id AND users.id=parenteleve.id WHERE parenteleve.parent_id=?");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }
}
