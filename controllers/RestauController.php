<?php
namespace app\controllers;
use app\models\RestaurationManager;
class RestauController extends Controller {

    public function index() {
        $restauManager=new RestaurationManager();
        $restaus = $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $this->render('restauration',$params);
    }

}