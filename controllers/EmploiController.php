<?php
namespace app\controllers;
use app\core\Request;
use app\models\EmploiDuTempsManager;
use app\views\emploiMoyen;
use app\views\emploiPrimaire;
use app\views\emploiSecondaire;

class EmploiController extends Controller {

    public function getPrimaireEmploi() {
        $emploiManager=new EmploiDuTempsManager();
        $emplois =   $emploiManager->getEmploi("classes.cycle='primaire'");
        $params = [
            'emplois' => $emplois,
        ];
        $emploi=new emploiPrimaire();
        $emploi->afficher_emploiPrimaire($emplois);
    }
    public function getMoyenEmploi() {
        $emploiManager=new EmploiDuTempsManager();
        $emplois =   $emploiManager->getEmploi("classes.cycle='moyen'");
        $params = [
            'emplois' => $emplois,
        ];
        $emploi=new emploiMoyen();
        $emploi->afficher_emploiMoyen($emplois);
    }
    public function getSecondaireEmploi() {
        $emploiManager=new EmploiDuTempsManager();
        $emplois =   $emploiManager->getEmploi("classes.cycle='secondaire'");
        $params = [
            'emplois' => $emplois,
        ];
        $emploi=new emploiSecondaire();
        $emploi->afficher_emploiSecondaire($emplois);
    }

}