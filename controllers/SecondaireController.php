<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\PratiqueManager;
class SecondaireController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='secondaire' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $this->render('secondaire',$params);
    }
    public function infoSecondaire() {
        $pratiqueManager=new PratiqueManager();
        $infos = $pratiqueManager->getPratique("'secondaire' or cycle='tout'");
        $params = [
            'infos' => $infos,
        ];
        $this->render('secondaireInfo',$params);
    }
}