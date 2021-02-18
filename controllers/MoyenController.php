<?php
namespace app\controllers;
use app\models\ArticleManager;
class MoyenController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles("type='moyen' or type='tout'");
        $params = [
            'articles' => $articles,
        ];

        $this->render('primaire',$params);
    }
}