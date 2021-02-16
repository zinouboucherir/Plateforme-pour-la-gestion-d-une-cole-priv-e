<?php
namespace app\controllers;
use app\models\ArticleManager;
class ShowArticleController extends Controller {

    public function showArticle() {
        $id=$_GET['id'];
        $articleManager=new ArticleManager();
        $article = $articleManager->getArticles('id= '.$id);
        $params = [
            'article' => $article,
        ];
        $this->render('showarticle',$params);
    }
}