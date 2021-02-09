<?php
namespace app\controllers;
use app\models\ArticleManager;
class HomeController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles();
        $params = [
            'articles' => $articles,
        ];

        $this->render('home',$params);
    }
}