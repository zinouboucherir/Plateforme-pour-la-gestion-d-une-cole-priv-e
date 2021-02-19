<?php
namespace app\controllers;
use app\models\RestaurationManager;
class AdminRestauController extends Controller {

    public function index() {
        $restauManager=new RestaurationManager();
        $restaus = $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $this->render('adminRestauration',$params);
    }

    public function addRestau()
    {
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
        $restauManager=new RestaurationManager();
        $restauManager->updateRestau($_POST['id'],$_POST['jour'],$_POST['entrée'],$_POST['principale'],$_POST['dessert']);
        $restaus = $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $this->render('adminRestauration',$params);
    }
}