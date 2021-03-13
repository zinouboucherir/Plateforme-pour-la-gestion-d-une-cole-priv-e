<?php
namespace app\controllers;
use app\models\EnsManager;
use app\views\adminEns;

class AdminEnsController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $ensManager=new EnsManager();
        $ens=$ensManager->getEns();
        $params = [
            'ens' =>  $ens,
        ];
      
        $en=new adminEns();
        $en->afficher_adminEns($ens);
    }

    public function addEns()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $ensManager=new EnsManager();
        $ensManager->insertEns($_POST['nom'],$_POST['prenom'],$_POST['matiere'],$_POST['jour'],$_POST['heure']);
        $ens =$ensManager->getEns();
        $params = [
            'ens' =>  $ens,
        ];
        header('location:adminEns');
       
    }
    public function supprimerEns() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $ensManager=new EnsManager();
        $ensManager->deleteEns($id);
        $ens = $ensManager->getEns();
        $params = [
            'ens'=> $ens,
        ];
        header('location:adminEns');
       
    }
        public function editEns()
        {        
            session_start();
            if(!isset($_SESSION['User']))
            {
                header('location:login');
                exit();
            }
            $ensManager=new EnsManager();
            $ensManager->updateEns($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['matiere'],$_POST['jour'],$_POST['heure']);
            $ens =  $ensManager->getEns();
            $params = [
                'ens' =>  $ens,
            ];
            header('location:adminEns');
      
    }
}