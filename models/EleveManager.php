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
    public function getClassesForEleve()
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * from classes');
            return $req;
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
    public function getEleves()
    { 
        $db=DataBase::getInstance();
        try
        {
            $req=$db->query('SELECT utilisateurs.*,users.*,elevclasse.*,classes.annee,classes.numroClasse,classes.cycle FROM utilisateurs JOIN users  JOIN elevclasse JOIN classes on utilisateurs.id=users.id AND users.id=elevclasse.id and elevclasse.classe_id=classes.id WHERE utilisateurs.type=2');
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function insertEleve($login,$pswd,$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email,$classe)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO utilisateurs (login,password,type) VALUES (?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$login,md5($pswd),2]);
            $req=$db->query('SELECT max(id) from utilisateurs');
            $result=$req->fetch((\PDO::FETCH_ASSOC)); 
            $sql1 = "INSERT INTO users (id,nom,prenom,adresse,tlfn1,tlfn2,tlfn3,email) VALUES (?,?,?,?,?,?,?,?)";
            $stmt1= $db->prepare($sql1);
            $stmt1->execute([$result['max(id)'],$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email]);

            $sql2 = "INSERT INTO elevclasse (id,classe_id) VALUES (?,?)";
            $stmt2= $db->prepare($sql2);
            $stmt2->execute([$result['max(id)'],$classe]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }

    public function deleteEleve($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql2 = "DELETE FROM elevclasse WHERE id = ?";
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
    public function updateEleve($id,$login,$nom,$prénom,$adresse,$tlfn1,$tlfn2,$tlfn3,$email,$annee,$numero,$cycle)
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

            $req=$db->prepare('SELECT id from classes where annee=? and numroClasse=? and cycle=?');
            $req->execute([$annee,$numero,$cycle]);
            $result=$req->fetch((\PDO::FETCH_ASSOC)); 
            $sql2 = "UPDATE elevclasse SET classe_id=? WHERE id = ?;";
            $stmt2= $db->prepare($sql2);
            $stmt2->execute([$result['id'],$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}
