<?php
namespace app\controllers;
use app\models\EleveManager;
use app\models\EmploiDuTempsManager;
use app\views\eleve;
use app\views\eleveactivite;
use app\views\eleveinfos;
use app\views\elevelogin;
use app\views\elevenote;
use app\views\emploiEleve;

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
    $eleve=new eleve();
    $eleve->afficher_eleve($infos);
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
        $emploi=new emploiEleve();
        $emploi->afficher_emploiEleve($emplois);
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
        $info=new eleveinfos();
        $info->afficher_eleveinfo($infos);
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
            $note=new elevenote();
            $note->afficher_elevenote($notes);
            }
            public function activiteEleve() {
                session_start();
                if(!isset($_SESSION['Eleve']))
                {
                    header('location:elevelogin');
                    exit();
                }
                $eleveManager=new EleveManager();
                $activites = $eleveManager->getActivity($_SESSION['Eleve']);
                
                $params = [
                    'activites' => $activites,
                ];
                $act=new eleveactivite();
                $act->afficher_eleveactivite($activites);
                }
}