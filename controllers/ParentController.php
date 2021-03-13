<?php
namespace app\controllers;
use app\models\ParentManager;
use app\models\ArticleManager;
use app\models\EmploiDuTempsManager;
use app\views\emploiParent;
use app\views\parentactivite;
use app\views\parentinfo;
use app\views\parentnote;
use app\views\parentt;

class ParentController extends Controller {

    public function index() {
    session_start();
    if(!isset($_SESSION['Parent']))
    {
        header('location:parentlogin');
        exit();
    }
    $parentManager=new ParentManager();
    $infos =   $parentManager->getParentInfos( $_SESSION['Parent']);
    $parentArticle=new ArticleManager();
    $articles=$parentArticle->getArticles("type='parent' or type='tout'");
    $params = [
        'infos' => $infos,
        'articles'=>$articles,
    ];
    $parent=new parentt();
    $parent->afficher_parent($infos,$articles);
    }
    public function infosparent() {
        session_start();
        if(!isset($_SESSION['Parent']))
        {
            header('location:parentlogin');
            exit();
        }
        $parentManager=new ParentManager();
        $infos =   $parentManager->getParentInfos( $_SESSION['Parent']);
        $params = [
            'infos' => $infos,
        ];
        $info=new parentinfo();
        $info->afficher_parentinfo($infos);
        }

        public function getParentEmploi() {
            session_start();
            if(!isset($_SESSION['Parent']))
            {
                header('location:parentlogin');
                exit();
            }
            $emploiManager=new EmploiDuTempsManager();
            $emplois = $emploiManager->getParentEmploi($_SESSION['Parent']);
            $params = [
                'emplois' => $emplois,
            ];
            $emploi=new emploiParent();
            $emploi->afficher_emploiParent($emplois);
        }

        public function noteParent() {
            session_start();
            if(!isset($_SESSION['Parent']))
            {
                header('location:parentlogin');
                exit();
            }
            $parentManager=new ParentManager();
            $notes = $parentManager->getNotes($_SESSION['Parent']);
            
            $params = [
                'notes' => $notes,
            ];
            $note=new parentnote();
            $note->afficher_parentnote($notes);
            }

            public function activiteParent() {
                session_start();
                if(!isset($_SESSION['Parent']))
                {
                    header('location:parentlogin');
                    exit();
                }
                $parentManager=new ParentManager();
                $activites = $parentManager->getActivity($_SESSION['Parent']);
                
                $params = [
                    'activites' => $activites,
                ];
                $activite=new parentactivite();
                $activite->afficher_parentactivite($activites);
                }
    

}