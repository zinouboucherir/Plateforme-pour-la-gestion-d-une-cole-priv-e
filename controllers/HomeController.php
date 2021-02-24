<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\ContactManager;
class HomeController extends Controller {

    public function index() {
        $articleManager=new ArticleManager();
        $articles = $articleManager->getArticles();
        $contactManager=new ContactManager();
        $telephone = $contactManager->getTelephones();
        $faxs = $contactManager->getFax();
        $emails = $contactManager->getEmail();
        $adresse = $contactManager->getAdresse();
        $params = [
         'telephones'=>$telephone,
         'faxs' =>$faxs,
         'emails' =>$emails,
         'adresse'=>$adresse,
         'articles' => $articles,
        ];
        $this->render('home',$params);
    }
}