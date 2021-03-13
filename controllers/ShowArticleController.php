<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\views\showarticle;

class ShowArticleController extends Controller {

    public function showArticle() {
        $id=$_GET['id'];
        $articleManager=new ArticleManager();
        $article = $articleManager->getArticles('id= '.$id);
        $params = [
            'article' => $article,
        ];
        $sarticle=new showarticle();
        $sarticle->afficher_showarticle($article);
    }
}