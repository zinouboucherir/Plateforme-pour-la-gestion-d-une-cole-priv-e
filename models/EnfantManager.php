<?php
namespace app\models;
require_once('DataBase.php');
class EnfantManager
{
    public function getParentEnfant($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT users.* FROM utilisateurs join parenteleve join users on utilisateurs.id=parenteleve.parent_id and parenteleve.id=users.id WHERE utilisateurs.id=? AND utilisateurs.type=3");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }
    public function insertEnfantToParent($id,$parent_id)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO parenteleve (id,parent_id) VALUES (?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id,$parent_id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }

    public function deleteEnfant($id,$id_parent)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql2 = "DELETE FROM parenteleve WHERE id = ? and parent_id=?";
            $stmt2= $db->prepare($sql2);
            $stmt2->execute([$id,$id_parent]);
       
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}
