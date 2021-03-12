<?php
namespace app\controllers;
use app\models\PratiqueManager;
class ShowInfoController extends Controller {

    public function showInfo() {
        $id=$_GET['id'];
        $pratiqueManager=new PratiqueManager();
        $info = $pratiqueManager->getInfo($id);
        $params = [
            'info' => $info,
        ];
        $this->render('showinfo',$params);
    }
}