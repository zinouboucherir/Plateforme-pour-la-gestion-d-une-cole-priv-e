<?php
namespace app\controllers;
use app\models\ArticleManager;
class SecondaireController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='secondaire' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $this->render('secondaire',$params);
    }
}