<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\PratiqueManager;
class PrimaireController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='primaire' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $this->render('primaire',$params);
    }
    public function infoPrimaire() {
        $pratiqueManager=new PratiqueManager();
        $infos = $pratiqueManager->getPratique("'primaire' or cycle='tout'");
        $params = [
            'infos' => $infos,
        ];
        $this->render('primaireInfo',$params);
    }
}