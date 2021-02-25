<?php
namespace app\models;
require_once('DataBase.php');
class EnsClasseManager
{
    public function getEnsClasse($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT classes.* FROM enseignant join ensclasse join classes on enseignant.id=ensclasse.id_ens and ensclasse.id_classe=classes.id WHERE enseignant.id=?");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }
    public function insertClasseToEns($id_classe,$id_ens)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO ensclasse (id_ens,id_classe) VALUES (?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id_ens,$id_classe]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }

    public function deleteClasse($id_ens,$id_clesse)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql2 = "DELETE FROM ensclasse WHERE id_ens = ? and id_classe=?";
            $stmt2= $db->prepare($sql2);
            $stmt2->execute([$id_ens,$id_clesse]);
       
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}
