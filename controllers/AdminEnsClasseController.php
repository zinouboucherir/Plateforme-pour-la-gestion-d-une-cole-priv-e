<?php
namespace app\controllers;

use app\models\ClasseManager;
use app\models\EnsClasseManager;
class AdminEnsClasseController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $enscManager=new EnsClasseManager();
        $classes=$enscManager->getEnsClasse($_GET['id']);
        $classeManager=new ClasseManager();
        $allclasse=$classeManager->getClasses();
        $params = [
            'classes' =>  $classes,
            'allclasse' =>  $allclasse,
            'id_ens' => $_GET['id'],
        ];
      
        $this->render('adminEnsClasse',$params);
    }

    public function addEnsClasse()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $enscManager=new EnsClasseManager();
        $enscManager->insertClasseToEns($_POST['id_classe'],$_GET['id']);
        $classes =$enscManager->getEnsClasse($_GET['id']);
        $params = [
            'classes' =>  $classes,
            'id_ens' => $_GET['id'],
        ];
        header('location:adminEnsClasse?id='.$_GET['id']);
        $this->render('adminEnsClasse',$params);
        $this->render('adminEnsClasse');
    }
    public function supprimerEnsClasse() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id_classe=$_GET['id'];
        $id_ens=$_GET['id_ens'];
        $enscManager=new EnsClasseManager();
        $enscManager->deleteClasse($id_ens,$id_classe);
        $classes = $enscManager->getEnsClasse($id_ens);
        $params = [
            'classes'=> $classes,
        ];
        header('location:adminEnsClasse?id='.$_GET['id_ens']);
        $this->render('adminEnsClasse',$params);
    }
}