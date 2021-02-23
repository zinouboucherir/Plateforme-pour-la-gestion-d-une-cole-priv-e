<?php
namespace app\models;
require_once('DataBase.php');
class EleveManager
{
    public function getEleveInfos($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT * FROM users join elevclasse join classes on users.id =elevclasse.id and elevclasse.classe_id=classes.id where users.id=?");
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
        {   $requete=$db->prepare("SELECT * FROM notes where eleve_id=?");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }
}
