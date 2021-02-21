<?php
namespace app\controllers;
use app\core\Request;
use app\models\EmploiDuTempsManager;
class EmploiController extends Controller {

    public function getPrimaireEmploi() {
        $emploiManager=new EmploiDuTempsManager();
        $emplois =   $emploiManager->getEmploi("classes.cycle='primaire'");
        $params = [
            'emplois' => $emplois,
        ];
        $this->render('emploiPrimaire',$params);
    }
    public function getMoyenEmploi() {
        $emploiManager=new EmploiDuTempsManager();
        $emplois =   $emploiManager->getEmploi("classes.cycle='moyen'");
        $params = [
            'emplois' => $emplois,
        ];
        $this->render('emploiMoyen',$params);
    }
    public function getSecondaireEmploi() {
        $emploiManager=new EmploiDuTempsManager();
        $emplois =   $emploiManager->getEmploi("classes.cycle='secondaire'");
        $params = [
            'emplois' => $emplois,
        ];
        $this->render('emploiSecondaire',$params);
    }
}