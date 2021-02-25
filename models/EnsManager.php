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

    public function insertEns($nom,$prenom,$matiere,$jour,$heure)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO enseignant (nom,prenom,matiere,jourRec,heureRec) VALUES (?,?,?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$nom,$prenom,$matiere,$jour,$heure]);
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
    public function updateEns($id,$nom,$prenom,$matiere,$jour,$heure)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE enseignant SET nom=?,prenom=?,matiere=?,jourRec=?,heureRec=?  WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$nom,$prenom,$matiere,$jour,$heure,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }

    public function getEnsForCycle($condition='true')
    { 
        $db=DataBase::getInstance();
        try
        {
            $req=$db->query('SELECT DISTINCT enseignant.* FROM enseignant join ensclasse join classes on enseignant.id=ensclasse.id_ens and ensclasse.id_classe=classes.id WHERE '.$condition);
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }

}
