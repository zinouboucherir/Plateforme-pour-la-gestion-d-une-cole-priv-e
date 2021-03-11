<?php
namespace app\models;
require_once('DataBase.php');
class ParentManager
{
    public function getParentInfos($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT * FROM users join utilisateurs  on users.id = utilisateurs.id  where users.id=?");
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
        {   $requete=$db->prepare("SELECT * FROM parenteleve join notes JOIN users on parenteleve.id=notes.eleve_id AND users.id=parenteleve.id WHERE parenteleve.parent_id=?");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }
    public function getActivity($id)
    { 
        $db=DataBase::getInstance();
        try
        {   $requete=$db->prepare("SELECT * FROM parenteleve join activite JOIN users on parenteleve.id=activite.eleve_id AND users.id=parenteleve.id WHERE parenteleve.parent_id=?");
            $requete->execute([$id]);
            return $requete;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }

    public function getParent()
    { 
        $db=DataBase::getInstance();
        try
        {
            $req=$db->query('SELECT utilisateurs.*,users.* FROM utilisateurs JOIN users on utilisateurs.id=users.id WHERE utilisateurs.type=3');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
    }

    public function insertParent($login,$pswd,$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO utilisateurs (login,password,type) VALUES (?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$login,md5($pswd),3]);
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

    public function deleteParent($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql2 = "DELETE FROM parenteleve WHERE id = ?";
            $stmt2= $db->prepare($sql2);
            $stmt2->execute([$id]);

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
    public function updateParent($id,$login,$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email)
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
