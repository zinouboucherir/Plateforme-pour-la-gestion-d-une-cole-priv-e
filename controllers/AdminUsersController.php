<?php
namespace app\controllers;

use app\views\adminUsers;

class AdminUsersController extends Controller {

    public function index() {
    session_start();
    if(!isset($_SESSION['User']))
    {
        header('location:login');
        exit();
    }
    $us=new adminUsers();
    $us->afficher_adminUsers();
    }
}