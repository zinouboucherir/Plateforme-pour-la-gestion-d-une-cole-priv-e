<?php
namespace app\models;
require_once('DataBase.php');
class RestaurationManager
{
    public function getRestau()
    { 
        $db=DataBase::getInstance();
        try
        {

            $req=$db->query("SELECT * FROM restauration  order By 
            CASE
            WHEN jour = 'dimanche' THEN 1
            WHEN jour = 'lundi' THEN 2
            WHEN jour= 'mardi' THEN 3
            WHEN jour = 'mercredi' THEN 4
            WHEN jour = 'jeudi' THEN 5
            END ASc");
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function insertRestau($jour,$entree,$principale,$dessert)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO restauration (jour,entrée,principale,dessert) VALUES (?,?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$jour,$entree,$principale,$dessert]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }
    public function deleteRestau($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM restauration WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateRestau($id,$jour,$entree,$principale,$dessert)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE restauration SET  jour=?,entrée=?,principale=?,dessert=? WHERE id=?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$jour,$entree,$principale,$dessert,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}