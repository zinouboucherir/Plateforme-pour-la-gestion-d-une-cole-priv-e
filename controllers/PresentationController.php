<?php
namespace app\controllers;
use app\models\PresentationManager;
class PresentationController extends Controller {

    public function index() {
        $presentationManager=new PresentationManager();
        $presentations = $presentationManager->getPresentations();
        $params = [
            'presentations' => $presentations,
        ];

        $this->render('presentation',$params);
    }
}