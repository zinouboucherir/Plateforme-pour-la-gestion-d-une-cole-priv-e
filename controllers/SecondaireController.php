<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\PratiqueManager;
use app\views\secondaire;
use app\views\secondaireinfo;

class SecondaireController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='secondaire' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $secondaire=new secondaire();
        $secondaire->afficher_secondaire($articles);
    }
    public function infoSecondaire() {
        $pratiqueManager=new PratiqueManager();
        $infos = $pratiqueManager->getPratique("'secondaire' or cycle='tout'");
        $params = [
            'infos' => $infos,
        ];
        $secondaire=new secondaireinfo();
        $secondaire->afficher_infosecondaire($infos);
    }
}