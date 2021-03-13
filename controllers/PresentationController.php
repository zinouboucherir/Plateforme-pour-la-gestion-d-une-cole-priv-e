<?php
namespace app\controllers;
use app\models\PresentationManager;
use app\views\presentation;

class PresentationController extends Controller {

    public function index() {
        $presentationManager=new PresentationManager();
        $presentations = $presentationManager->getPresentations();
        $params = [
            'presentations' => $presentations,
        ];

        $presentation=new presentation();
        $presentation->afficher_presentation($presentations);
    }
}