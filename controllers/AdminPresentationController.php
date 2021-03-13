<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\models\PresentationManager;
use app\views\adminPresentation;

class AdminPresentationController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $presentationManager=new PresentationManager();
        $presentations = $presentationManager->getPresentations();
        $params = [
            'presentations' => $presentations,
        ];
        $presentation=new adminPresentation();
        $presentation->afficher_adminPresentation($presentations);
    }

    public function addPresentation(Request $request)
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
        $presentationManager=new PresentationManager();
        $presentationManager->insertPresentation($_POST['texte'],$folder,$_POST['titre']);
        $presentations = $presentationManager->getPresentations();
        $params = [
            'presentations' =>  $presentations,
        ];
        header('location:adminPresentation');
  
    }
    public function supprimerPresentation() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $presentationManager=new PresentationManager();
        $presentationManager->deletePresenation($id);
        header('location:adminPresentation');
    }

    public function editPresentation(Request $request)
    {     session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }     
        $data=$request->all();
        $presentationManager=new PresentationManager();
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
       // $folder = Application::$STORAGE_DIR.$filename;
        $folder = "../public/images/".$filename;
        move_uploaded_file($tempname, $folder);
        $folder= substr($folder,10);
        $presentationManager->updatePresentation($_POST['id'],$_POST['texte'],$folder,$_POST['titre']);
        header('location:adminPresentation');
    }
}