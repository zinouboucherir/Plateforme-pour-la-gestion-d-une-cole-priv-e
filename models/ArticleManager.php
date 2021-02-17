<?php
namespace app\models;
require_once('DataBase.php');
class ArticleManager
{
    public function getArticles($condition='true')
    { 
        $db=DataBase::getInstance();
        try
        {
    
            $req=$db->query('SELECT * FROM articles WHERE '.$condition);
            return $req;
        }
        catch (\Exception $e)
          { 
             return $e;
          }
     
    }
    public function insertArticle($lien,$titre,$descr,$type)
    {
        $db=DataBase::getInstance();
        try
        {
            $sql = "INSERT INTO articles (titre,descr,lien,type) VALUES (?,?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$lien, $titre, $descr,$type]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
    }
    public function deleteArticles($id)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "DELETE FROM articles WHERE id = ?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
    public function updateArticle($id,$type,$descr,$lien,$titre)
    { 
        $db=DataBase::getInstance();
        try
        {
            $sql = "UPDATE articles SET  titre=?,descr=?,lien=?,type=? WHERE id=?;";
            $stmt= $db->prepare($sql);
            $stmt->execute([$titre,$descr,$lien,$type,$id]);
        }
        catch (\Exception $e)
        { 
           return $e;
        }
     
    }
}
