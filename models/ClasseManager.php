<?php
namespace app\models;
require_once('DataBase.php');
class ClasseManager
{
    public function getClasses()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM classes WHERE id>1');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function getClassesForEmloi()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT classes.*, COUNT(*) as num from classes left join emploidutemps on emploidutemps.classe_id=classes.id GROUP BY classes.id having num<5');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }

    public function insertClasse($annee,$numero,$cycle)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO classes (annee,numroClasse,cycle) VALUES (?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$annee,$numero,$cycle]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }

    public function deleteClasse($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql1="UPDATE elevclasse SET classe_id=? WHERE classe_id = ?";
            $stmt1= $db->prepare($sql1);
            $stmt1->execute([1,$id]);

            $sql = "DELETE FROM classes WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateClasse($id,$annee,$numero,$cycle)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE classes SET annee=?,numroClasse=?,cycle=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$annee,$numero,$cycle,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}