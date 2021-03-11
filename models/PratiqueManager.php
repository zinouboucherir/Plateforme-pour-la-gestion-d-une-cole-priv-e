<?php
namespace app\models;
require_once('DataBase.php');
class PratiqueManager
{
    public function getPratiquePrimaire($condition='true')
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
}
