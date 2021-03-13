<?php
namespace app\controllers;

use app\models\EleveManager;
use app\models\EnfantManager;
use app\views\adminEnfant;

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
        $eleves=$eleveManager->getElevesForParent();
        $params = [
            'enfants' =>  $enfants,
            'eleves' =>  $eleves,
            'id_parent' => $_GET['id'],
        ];
      
        $enfant=new adminEnfant();
        $enfant->afficher_adminEnfant($eleves,$enfants,$_GET['id']);
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
        header('location:adminEnfant?id='.$id_parent);
    
    }
}