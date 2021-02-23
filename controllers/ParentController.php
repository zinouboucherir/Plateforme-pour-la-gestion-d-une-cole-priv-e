<?php
namespace app\controllers;
use app\models\ParentManager;
use app\models\EmploiDuTempsManager;
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
    $params = [
        'infos' => $infos,
    ];
        $this->render('parent',$params);
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
            $this->render('parentinfos',$params);
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
            $this->render('emploiPARENT',$params);
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
                $this->render('parentnote',$params);
            }

        
    

}