<?php
namespace app\controllers;

use app\models\EleveManager;
use app\models\EnfantManager;
class AdminEnfantController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $enfantManager=new EnfantManager();
        $enfants=$enfantManager->getParentEnfant($_GET['id']);
        $eleveManager=new EleveManager();
        $eleves=$eleveManager->getEleves();
        $params = [
            'enfants' =>  $enfants,
            'eleves' =>  $eleves,
            'id_parent' => $_GET['id'],
        ];
      
        $this->render('adminEnfant',$params);
    }

    public function addEnfant()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $enfantManager=new EnfantManager();
        $enfantManager->insertEnfantToParent($_POST['id_enfant'],$_GET['id']);
        $enfants =$enfantManager->getParentEnfant($_GET['id']);
        $params = [
            'enfants' =>  $enfants,
            'id_parent' => $_GET['id'],
        ];
        header('location:adminEnfant?id='.$_GET['id']);
        $this->render('adminEnfant',$params);
        $this->render('adminEnfant');
    }
    public function supprimerEnfant() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $id_parent=$_GET['id_parent'];
        $enfantManager=new EnfantManager();
        $enfantManager->deleteEnfant($id,$id_parent);
        $enfants = $enfantManager->getParentEnfant($id_parent);
        $params = [
            'enfants'=> $enfants,
        ];
        header('location:adminEnfant?id='.$_GET['id']);
        $this->render('adminEnfant',$params);
    }
}