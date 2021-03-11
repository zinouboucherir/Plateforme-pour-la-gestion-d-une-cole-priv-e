<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\models\ArticleManager;
class AdminArticleController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles();
        $params = [
            'articles' => $articles,
        ];
        $this->render('adminArticles',$params);
    }

    public function addArticles(Request $request)
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $data=$request->all();
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        // $folder = Application::$STORAGE_DIR.$filename;
        $folder = "../public/images/".$filename;
        move_uploaded_file($tempname, $folder);
        $folder= substr($folder,10);
        $articleManager=new ArticleManager();
        $articleManager->insertArticle($_POST['titre'],$_POST['descr'],$folder,$_POST['type']);
        $articles = $articleManager->getArticles();
        $params = [
            'articles' => $articles,
        ];
        header('location:adminArticles');
        $this->render('adminArticles',$params);
        $this->render('adminArticles');
    }
    public function supprimerArticle() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $articleManager=new ArticleManager();
        $articleManager->deleteArticles($id);
        $articles = $articleManager->getArticles();
        $params = [
            'articles' => $articles,
        ];
        $this->render('adminArticles',$params);
    }

    public function editArticles(Request $request)
    {   
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }     
        $data=$request->all();
        $articleManager=new ArticleManager();
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
       // $folder = Application::$STORAGE_DIR.$filename;
        $folder = "../public/images/".$filename;
        move_uploaded_file($tempname, $folder);
        $folder= substr($folder,10);
        $articleManager->updateArticle($_POST['id'],$_POST['type'],$_POST['descr'],$folder,$_POST['titre']);
        $articles = $articleManager->getArticles();
        $params = [
            'articles' => $articles,
        ];
        header('location:adminArticles');
        $this->render('adminArticles',$params);
    }
}