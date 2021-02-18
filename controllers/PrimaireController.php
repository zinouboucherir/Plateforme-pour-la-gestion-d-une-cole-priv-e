<?php
namespace app\controllers;
use app\models\ArticleManager;
class PrimaireController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='primaire' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $this->render('primaire',$params);
    }
}