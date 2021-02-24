<?php
namespace app\controllers;
use app\models\ParentManager;
class AdminParentController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $parentManager=new ParentManager();
        $parents=$parentManager->getParent();
        $params = [
            'parents' =>  $parents,
        ];
      
        $this->render('adminParent',$params);
    }

    public function addParent()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $parentManager=new ParentManager();
        $parentManager->insertParent($_POST['login'],$_POST['password'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tlfn1'],$_POST['tlfn2'],$_POST['tlfn3'],$_POST['email']);
        $parents =$parentManager->getParent();
        $params = [
            'parents' =>  $parents,
        ];
        header('location:adminParent');
        $this->render('adminParent',$params);
        $this->render('adminParent');
    }
    public function supprimerParent() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $parentManager=new ParentManager();
        $parentManager->deleteParent($id);
        $parents = $parentManager->getParent();
        $params = [
            'parents'=> $parents,
        ];
        header('location:adminParent');
        $this->render('adminParent',$params);
    }
        public function editParent()
        {        
            session_start();
            if(!isset($_SESSION['User']))
            {
                header('location:login');
                exit();
            }
            $parentManager=new ParentManager();
            $parentManager->updateParent($_POST['id'],$_POST['login'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tlfn1'],$_POST['tlfn2'],$_POST['tlfn3'],$_POST['email']);
            $parents =  $parentManager->getParent();
            $params = [
                'parents' =>  $parents,
            ];
            header('location:adminParent');
            $this->render('adminParent',$params);
    }
}