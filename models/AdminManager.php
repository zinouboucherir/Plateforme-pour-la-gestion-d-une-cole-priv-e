<?php
namespace app\models;
require_once('DataBase.php');
class AdminManager
{
    public function getAdmin()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM utilisateurs join users on utilisateurs.id = users.id WHERE utilisateurs.type=1');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function insertAdmin($login,$pswd,$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO utilisateurs (login,password,type) VALUES (?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$login,md5($pswd),1]);
            $req=$db->query('SELECT max(id) from utilisateurs');
            $result=$req->fetch((\PDO::FETCH_ASSOC)); 
            $sql1 = "INSERT INTO users (id,nom,prenom,adresse,tlfn1,tlfn2,tlfn3,email) VALUES (?,?,?,?,?,?,?,?)";
            $stmt1= $db->prepare($sql1);
            $stmt1->execute([$result['max(id)'],$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }

    public function deleteAdmin($id)
    { 
        $db=DataBase::getInstance();
        try
        {
         
            $sql1 = "DELETE FROM users WHERE id = ?";
            $stmt1= $db->prepare($sql1);
            $stmt1->execute([$id]);

            $sql = "DELETE FROM utilisateurs WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
       
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateAdmin($id,$login,$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE utilisateurs SET login=? WHERE id = ?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$login,$id]);

            $sql1 = "UPDATE users SET nom=?,prenom=?,adresse=?,tlfn1=?,tlfn2=?,tlfn3=?,email=? WHERE id = ?;";
            $stmt1= $db->prepare($sql1);
            $stmt1->execute([$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }

}
