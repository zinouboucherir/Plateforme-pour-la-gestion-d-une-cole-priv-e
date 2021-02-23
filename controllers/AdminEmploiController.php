<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\models\ClasseManager;
use app\models\EmploiDuTempsManager;
class AdminEmploiController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $emploiManager=new EmploiDuTempsManager();
        $classeManager=new ClasseManager();
        $emplois = $emploiManager->getEmploi();
        $classes=$classeManager->getClassesForEmloi();
        $params = [
            'cl' =>  $classes,
            'emplois' =>  $emplois,
        ];
      
        $this->render('adminEmploi',$params);
    }

    public function addEmploi(Request $request)
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $emploiManager=new EmploiDuTempsManager();
        $emploiManager->insertEmploi($_POST['jour'],$_POST['t1'],$_POST['t2'],$_POST['t3'],$_POST['t4'],$_POST['t5'],$_POST['t6'],$_POST['t7'],$_POST['t8'],$_POST['t9'],$_POST['cycle'],$_POST['classe']);
        $emplois =$emploiManager->getEmploi();
        $params = [
            'emplois' =>  $emplois,
        ];
        header('location:adminEmploi');
        $this->render('adminEmploi',$params);
        $this->render('adminEmploi');
    }
    public function supprimerEmploi() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $emploiManager=new EmploiDuTempsManager();
        $emploiManager->deleteEmploi($id);
        $emplois = $emploiManager->getEmploi();
        $params = [
            'emplois'=> $emplois,
        ];
        header('location:adminEmploi');
        $this->render('adminEmploi',$params);
    }
    public function editEmploi()
    {        
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $emploiManager=new EmploiDuTempsManager();
        $emploiManager->updateEmploi($_POST['id'],$_POST['t1'],$_POST['t2'],$_POST['t3'],$_POST['t4'],$_POST['t5'],$_POST['t6'],$_POST['t7'],$_POST['t8'],$_POST['t9']);
        $emplois =  $emploiManager->getEmploi();
        $params = [
            'emplois' =>  $emplois,
        ];
        header('location:adminEmploi');
        $this->render('adminEmploi',$params);
    }
}