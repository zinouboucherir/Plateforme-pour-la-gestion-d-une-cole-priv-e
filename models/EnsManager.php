<?php
namespace app\models;
require_once('DataBase.php');
class EnsManager
{  
  public function getEns($condition='true')
    { 
        $db=DataBase::getInstance();
        try
        {
            $req=$db->query('SELECT * FROM enseignant');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }

    public function insertEns($nom,$prenom,$matiere,$cycle)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO enseignant (nom,prenom,matiere,cycle) VALUES (?,?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$nom,$prenom,$matiere,$cycle]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }

    public function deleteEns($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql2 = "DELETE FROM enseignant WHERE id = ?";
            $stmt2= $db->prepare($sql2);
            $stmt2->execute([$id]);

        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateEns($id,$nom,$prenom,$matiere,$cycle)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE enseiGNANT SET nom=?,prenom=?,matiere=?,cycle=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$nom,$prenom,$matiere,$cycle,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }

}
