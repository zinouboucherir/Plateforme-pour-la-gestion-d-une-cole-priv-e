<?php
namespace app\controllers;
class AdminUsersController extends Controller {

    public function index() {
    session_start();
    if(!isset($_SESSION['User']))
    {
        header('location:login');
        exit();
    }
        $this->render('adminUsers');
    }
}