<?php
namespace app\controllers;
use app\models\EleveManager;
use app\models\EmploiDuTempsManager;
class EleveController extends Controller {

    public function index() {
    session_start();
    if(!isset($_SESSION['Eleve']))
    {
        header('location:elevelogin');
        exit();
    }
    $eleveManager=new EleveManager();
    $infos =   $eleveManager->getEleveInfos( $_SESSION['Eleve']);
    $params = [
        'infos' => $infos,
    ];
        $this->render('eleve',$params);
    }
    public function getEleveEmploi() {
        session_start();
        if(!isset($_SESSION['Eleve']))
        {
            header('location:elevelogin');
            exit();
        }
        $emploiManager=new EmploiDuTempsManager();
        $emplois = $emploiManager->getEleveEmploi($_SESSION['Eleve']);
        $params = [
            'emplois' => $emplois,
        ];
        $this->render('emploiEleve',$params);
    }

    public function infoseleve() {
        session_start();
        if(!isset($_SESSION['Eleve']))
        {
            header('location:elevelogin');
            exit();
        }
        $eleveManager=new EleveManager();
        $infos =   $eleveManager->getEleveInfos( $_SESSION['Eleve']);
        $params = [
            'infos' => $infos,
        ];
            $this->render('eleveinfos',$params);
        }
        public function noteEleve() {
            session_start();
            if(!isset($_SESSION['Eleve']))
            {
                header('location:elevelogin');
                exit();
            }
            $eleveManager=new EleveManager();
            $notes = $eleveManager->getNotes($_SESSION['Eleve']);
            
            $params = [
                'notes' => $notes,
            ];
                $this->render('elevenote',$params);
            }
}