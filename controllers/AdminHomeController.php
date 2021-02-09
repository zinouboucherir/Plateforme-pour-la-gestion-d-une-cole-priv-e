<?php
namespace app\controllers;

class AdminHomeController extends Controller {

    public function index() {
        $this->render('AdminHome');
    }
}