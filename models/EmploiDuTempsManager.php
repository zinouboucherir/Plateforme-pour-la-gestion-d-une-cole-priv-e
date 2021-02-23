<?php
namespace app\models;
require_once('DataBase.php');
class EmploiDuTempsManager
{
    public function getEmploi($condition='true')
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT emploidutemps.*,classes.cycle,classes.numroClasse,classes.annee FROM `emploidutemps` join classes on emploidutemps.classe_id=classes.id where '.$condition);
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function getEleveEmploi($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $req=$db->prepare('SELECT emploidutemps.*,classes.cycle,classes.numroClasse,classes.annee FROM `emploidutemps` join (SELECT classes.* from classes join elevclasse on elevclasse.classe_id=classes.id where elevclasse.id= ?) as classes on emploidutemps.classe_id=classes.id');
            $req->execute([intval($id)]);
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function insertEmploi($jour,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$cycle,$classe)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO emploidutemps (jour,t1,t2,t3,t4,t5,t6,t7,t8,t9,cycle,classe_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$jour,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$cycle,$classe]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }
    public function deleteEmploi($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM emploidutemps WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateEmploi($id,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE emploidutemps SET t1=?,t2=?,t3=?,t4=?,t5=?,t6=?,t7=?,t8=?,t9=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}
