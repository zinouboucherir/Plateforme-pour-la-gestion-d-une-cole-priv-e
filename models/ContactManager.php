<?php
namespace app\models;
require_once('DataBase.php');
class ContactManager
{
    public function getTelephones()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM telephone');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function getFax()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM fax');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function getEmail()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM email');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function getAdresse()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM adresse');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function insertTelephone($numero)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO telephone (numero) VALUES (?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$numero]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }
    public function insertFax($fax)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO fax (fax) VALUES (?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$fax]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }
    public function insertEmail($email)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO email (email) VALUES (?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$email]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }
    public function deleteTelephone($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM telephone WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function deleteFax($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM fax WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function deleteEmail($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM email WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function deleteAdresse($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM adresse WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
        
    public function updateTelephone($id,$numero)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE telephone SET numero=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$numero,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateFax($id,$fax)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE fax SET fax = ? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$fax,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateEmail($id,$email)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE email SET email=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$email,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateAdresse($id,$adresse)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE adresse SET adresse=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$adresse,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}