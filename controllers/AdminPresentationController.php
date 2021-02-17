<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\models\PresentationManager;
class AdminPresentationController extends Controller {

    public function index() {
        $presentationManager=new PresentationManager();
        $presentations = $presentationManager->getPresentations();
        $params = [
            'presentations' => $presentations,
        ];
        $this->render('adminPresentation',$params);
    }

    public function addPresentation(Request $request)
    {
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
        $this->render('adminPresentation',$params);
        $this->render('adminPresentation');
    }
    public function supprimerPresentation() {
        $id=$_GET['id'];
        $presentationManager=new PresentationManager();
        $presentationManager->deletePresenation($id);
        $presentation = $presentationManager->getPresentations();
        $params = [
            'presentations'=> $presentation,
        ];
        $this->render('adminPresentation',$params);
    }

    public function editPresentation(Request $request)
    {        
        $data=$request->all();
        $presentationManager=new PresentationManager();
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
       // $folder = Application::$STORAGE_DIR.$filename;
        $folder = "../public/images/".$filename;
        move_uploaded_file($tempname, $folder);
        $folder= substr($folder,10);
        $presentationManager->updatePresentation($_POST['id'],$_POST['texte'],$folder,$_POST['titre']);
        $presentations = $presentationManager->getPresentations();
        $params = [
            'presentations' =>  $presentations,
        ];
        header('location:adminPresentation');
        $this->render('adminPresentation',$params);
    }
}