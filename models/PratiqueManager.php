<?php
namespace app\models;
require_once('DataBase.php');
class PratiqueManager
{
    public function getPratique($condition='true')
    { 
        $db=DataBase::getInstance();
        try
        {
            $req=$db->query('SELECT * FROM infopratique WHERE cycle= '.$condition );
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function getInfo($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql2 = "SELECT * FROM infopratique WHERE id = ?";
            $stmt2= $db->prepare($sql2);
            $stmt2->execute([$id]);
            return $stmt2;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
}
