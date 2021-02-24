<?php
namespace app\controllers;
use app\core\Request;
use app\models\ClasseManager;
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
      
        $this->render('adminClasse',$params);
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
        $this->render('adminClasse',$params);
        $this->render('adminClasse');
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
        
        $this->render('adminClasse',$params);
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
            header('location:adminClasse');
            $this->render('adminClasse',$params);
    }
}