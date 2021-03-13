<?php
namespace app\controllers;
use app\models\PratiqueManager;
use app\views\showinfo;

class ShowInfoController extends Controller {

    public function showInfo() {
        $id=$_GET['id'];
        $pratiqueManager=new PratiqueManager();
        $info = $pratiqueManager->getInfo($id);
        $params = [
            'info' => $info,
        ];
        $inf=new showinfo();
        $inf->afficher_showinfo($info);
    }
}