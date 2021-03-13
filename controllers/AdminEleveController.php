<?php
namespace app\controllers;
use app\models\EleveManager;
use app\views\adminEleve;

class AdminEleveController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $eleveManager=new EleveManager();
        $eleves=$eleveManager->getEleves();
        $classes=$eleveManager->getClassesForEleve();
        $eleve=new adminEleve();
        $eleve->afficher_adminEleve($eleves,$classes);
      
     
    }

    public function addEleve()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $eleveManager=new EleveManager();
        $eleveManager->insertEleve($_POST['login'],$_POST['password'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tlfn1'],$_POST['tlfn2'],$_POST['tlfn3'],$_POST['email'],$_POST['classe']);
        var_dump($eleveManager);
        $eleves =$eleveManager->getEleves();
        $params = [
            'eleves' =>  $eleves,
        ];
        header('location:adminEleve');
     
    }
    public function supprimerEleve() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $eleveManager=new EleveManager();
        $eleveManager->deleteEleve($id);
        $eleves = $eleveManager->getEleves();
        $params = [
            'eleves'=> $eleves,
        ];
        header('location:adminEleve');
        
    }
        public function editEleve()
        {        
            session_start();
            if(!isset($_SESSION['User']))
            {
                header('location:login');
                exit();
            }
            $eleveManager=new EleveManager();
            $eleveManager->updateEleve($_POST['id'],$_POST['login'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tlfn1'],$_POST['tlfn2'],$_POST['tlfn3'],$_POST['email'],$_POST['annee'],$_POST['numroClasse'],$_POST['cycle']);
            $eleves =  $eleveManager->getEleves();
            $params = [
                'eleves' =>  $eleves,
            ];
            header('location:adminEleve');
          
    }
}