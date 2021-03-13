<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\PratiqueManager;
use app\views\moyen;
use app\views\moyenInfo;

class MoyenController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='moyen' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $moyen=new moyen();
        $moyen->afficher_moyen($articles);
    }
    public function infoMoyen() {
        $pratiqueManager=new PratiqueManager();
        $infos = $pratiqueManager->getPratique("'moyen' or cycle='tout'");
        $params = [
            'infos' => $infos,
        ];
        $secondaire=new moyeninfo();
        $secondaire->afficher_infomoyen($infos);
    }
}