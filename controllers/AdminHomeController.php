<?php
namespace app\controllers;

class AdminHomeController extends Controller {

    public function index() {
    session_start();
    if(!isset($_SESSION['User']))
    {
        header('location:login');
        exit();
    }
        $this->render('AdminHome');
    }
}