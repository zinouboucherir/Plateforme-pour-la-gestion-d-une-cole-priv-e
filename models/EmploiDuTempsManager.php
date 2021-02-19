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
    
            $req=$db->query('SELECT * FROM emploidutemps WHERE '.$condition);
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
            $sql = "INSERT INTO emploidutemps (jour,t1,t2,t3,t4,t5,t6,t7,t8,t9,cycle,classe) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
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
    public function updateEmploi($id,$jour,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$cycle,$classe)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE emploidutemps SET  jour=?,t1=?,t2=?,t3=?,t4=?,t5=?,t6=?,t7=?,t8=?,t9=?,cycle=?,classe=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$jour,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$cycle,$classe,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}
