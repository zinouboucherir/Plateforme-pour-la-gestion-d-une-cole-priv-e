<?php
namespace app\controllers;
use app\core\Request;
use app\models\ClasseManager;
use app\views\adminClasse;

class AdminClassesController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $classeManager=new ClasseManager();
        $classes=$classeManager->getClasses();
        $params = [
            'classes' =>  $classes,
        ];
      
        $classe=new adminClasse();
        $classe->afficher_adminClasse($classes);
    }

    public function addClasse()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $classeManager=new ClasseManager();
        $classeManager->insertClasse($_POST['annee'],$_POST['numroClasse'],$_POST['cycle']);
        $classes =$classeManager->getClasses();
        $params = [
            'classes' =>  $classes,
        ];
        header('location:adminClasse');
        $classe=new adminClasse();
        $classe->afficher_adminClasse($classes);
    }
    public function supprimerClasse() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $classeManager=new ClasseManager();
        $classeManager->deleteClasse($id);
        $classes = $classeManager->getClasses();
        $params = [
            'classes'=> $classes,
        ];
        
        $classe=new adminClasse();
        $classe->afficher_adminClasse($classes);
    }
        public function editClasse()
        {        
            session_start();
            if(!isset($_SESSION['User']))
            {
                header('location:login');
                exit();
            }
            $classeManager=new classeManager();
            $classeManager->updateClasse($_POST['id'],$_POST['annee'],$_POST['numroClasse'],$_POST['cycle']);
            $classes =  $classeManager->getClasses();
            $params = [
                'classes' =>  $classes,
            ];
            $classe=new adminClasse();
            $classe->afficher_adminClasse($classes);
    }
}