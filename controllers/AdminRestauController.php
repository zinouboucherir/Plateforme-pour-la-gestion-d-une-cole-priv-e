<?php
namespace app\controllers;
use app\models\RestaurationManager;
class AdminRestauController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $restauManager=new RestaurationManager();
        $restaus = $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $this->render('adminRestauration',$params);
    }

    public function addRestau()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $restauManager=new RestaurationManager();
        $restauManager->insertRestau($_POST['jour'],$_POST['entrée'],$_POST['principale'],$_POST['dessert']);
        $restaus =  $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $this->render('adminRestauration',$params);
        $this->render('adminRestauration');
    }
    public function supprimerRestau() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $restauManager=new RestaurationManager();
        $restauManager->deleteRestau($id);
        $restaus = $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $this->render('adminRestauration',$params);
    }

    public function editRestau()
    {    
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }    
        $restauManager=new RestaurationManager();
        $restauManager->updateRestau($_POST['id'],$_POST['jour'],$_POST['entrée'],$_POST['principale'],$_POST['dessert']);
        $restaus = $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $this->render('adminRestauration',$params);
    }
}