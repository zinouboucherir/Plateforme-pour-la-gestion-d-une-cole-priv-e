<?php
namespace app\models;
require_once('DataBase.php');
class PresentationManager
{
    public function getPresentations()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM presentation');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function insertPresentation($texte,$lien,$titre)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO presentation (texte,image,titre) VALUES (?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$texte,$lien,$titre]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }
    public function deletePresenation($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM presentation WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updatePresentation($id,$texte,$lien,$titre)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE presentation SET  texte=?,image=?,titre=? WHERE id=?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$texte,$lien,$titre,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}
