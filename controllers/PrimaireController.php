<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\PratiqueManager;
use app\views\primaire;
use app\views\primaireinfo;

class PrimaireController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='primaire' or type='tout'");
        $params = [
            'articles' => $articles,
        ];
        $primaire=new primaire();
        $primaire->afficher_primaire($articles);
    
    }
    public function infoPrimaire() {
        $pratiqueManager=new PratiqueManager();
        $infos = $pratiqueManager->getPratique("'primaire' or cycle='tout'");
        $params = [
            'infos' => $infos,
        ];
        $primaire=new primaireinfo();
        $primaire->afficher_infoprimaire($infos);
    }
}