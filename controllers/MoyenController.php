<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\PratiqueManager;
class MoyenController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='moyen' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $this->render('moyen',$params);
    }
    public function infoMoyen() {
        $pratiqueManager=new PratiqueManager();
        $infos = $pratiqueManager->getPratiquePrimaire("'moyen' or cycle='tout'");
        $params = [
            'infos' => $infos,
        ];

        $this->render('primaireInfo',$params);
    }
}