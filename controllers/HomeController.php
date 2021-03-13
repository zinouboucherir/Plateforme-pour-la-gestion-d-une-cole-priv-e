<?php
namespace app\controllers;
use app\models\ArticleManager;
use app\models\ContactManager;
use app\views\home;
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
        $home=new home();
        $home->afficher_home($articles,$adresse,$emails,$faxs,$telephone);

    }
}