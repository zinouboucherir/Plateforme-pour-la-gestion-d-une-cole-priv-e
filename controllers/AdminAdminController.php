<?php
namespace app\controllers;
use app\models\AdminManager;
class AdminAdminController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $adminManager=new AdminManager();
        $admins=$adminManager->getAdmin();
        $params = [
            'admins' =>  $admins,
        ];
      
        $this->render('adminAdmin',$params);
    }

    public function addAdmin()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $adminManager=new AdminManager();
        $adminManager->insertAdmin($_POST['login'],$_POST['password'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tlfn1'],$_POST['tlfn2'],$_POST['tlfn3'],$_POST['email']);
        $admins =$adminManager->getAdmin();
        $params = [
            'admins' =>  $admins,
        ];
        header('location:adminAdmin');
        $this->render('adminAdmin',$params);
        $this->render('adminAdmin');
    }
    public function supprimerAdmin() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $adminManager=new AdminManager();
        $adminManager->deleteAdmin($id);
        $admins = $adminManager->getAdmin();
        $params = [
            'admins'=> $admins,
        ];
        header('location:adminAdmin');
        $this->render('adminAdmin',$params);
    }
        public function editAdmin()
        {        
            session_start();
            if(!isset($_SESSION['User']))
            {
                header('location:login');
                exit();
            }
            $adminManager=new AdminManager();
            $adminManager->updateAdmin($_POST['id'],$_POST['login'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tlfn1'],$_POST['tlfn2'],$_POST['tlfn3'],$_POST['email']);
            $admins =  $adminManager->getAdmin();
            $params = [
                'admins' =>  $admins,
            ];
            header('location:adminAdmin');
            $this->render('adminAdmin',$params);
    }
}