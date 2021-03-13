<?php
namespace app\controllers;
use app\core\Request;
use app\models\EnsManager;
use app\views\ensMoyen;
use app\views\ensPrimaire;
use app\views\ensSecondaire;

class EnsController extends Controller {

    public function getPrimaireEns() {
        $ensManager=new EnsManager();
        $ens =   $ensManager->getEnsForCycle("classes.cycle='primaire'");
        $params = [
            'ens' => $ens,
        ];
        $e=new ensPrimaire();
        $e->afficher_ensPrimaire($ens);
    }
    public function getMoyenEns() {
        $ensManager=new EnsManager();
        $ens =   $ensManager->getEnsForCycle("classes.cycle='moyen'");
        $params = [
            'ens' => $ens,
        ];
        $e=new ensMoyen();
        $e->afficher_ensMoyen($ens);
    }
    public function getSecondaireEns() {
        $ensManager=new EnsManager();
        $ens =   $ensManager->getEnsForCycle("classes.cycle='secondaire'");
        $params = [
            'ens' => $ens,
        ];
        $e=new ensSecondaire();
        $e->afficher_ensSecondaire($ens);
    }

}