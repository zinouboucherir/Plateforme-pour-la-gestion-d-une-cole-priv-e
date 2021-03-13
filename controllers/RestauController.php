<?php
namespace app\controllers;
use app\models\RestaurationManager;
use app\views\restauration;

class RestauController extends Controller {

    public function index() {
        $restauManager=new RestaurationManager();
        $restaus = $restauManager->getRestau();
        $params = [
            'restaus' => $restaus,
        ];
        $res=new restauration();
        $res->afficher_resauration($restaus);
    }

}