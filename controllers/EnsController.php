<?php
namespace app\controllers;
use app\core\Request;
use app\models\EnsManager;
class EnsController extends Controller {

    public function getPrimaireEns() {
        $ensManager=new EnsManager();
        $ens =   $ensManager->getEnsForCycle("classes.cycle='primaire'");
        $params = [
            'ens' => $ens,
        ];
        $this->render('ensPrimaire',$params);
    }
    public function getMoyenEns() {
        $ensManager=new EnsManager();
        $ens =   $ensManager->getEnsForCycle("classes.cycle='moyen'");
        $params = [
            'ens' => $ens,
        ];
        $this->render('ensMoyen',$params);
    }
    public function getSecondaireEns() {
        $ensManager=new EnsManager();
        $ens =   $ensManager->getEnsForCycle("classes.cycle='secondaire'");
        $params = [
            'ens' => $ens,
        ];
        $this->render('ensSecondaire',$params);
    }

}