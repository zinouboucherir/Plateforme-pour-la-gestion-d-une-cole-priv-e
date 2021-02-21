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
    
            $req=$db->query('SELECT * FROM classes');
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
}
