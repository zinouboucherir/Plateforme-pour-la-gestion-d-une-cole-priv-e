<?php
namespace app\controllers;
use app\models\UserManager;
use app\views\adminHome;

class AdminHomeController extends Controller {

    public function index() {
    session_start();
    if(!isset($_SESSION['User']))
    {
        header('location:login');
        exit();
    }
    $userManager=new UserManager();
    $infos =   $userManager->getAllInfos( $_SESSION['User']);
    $params = [
        'infos' => $infos,
    ];
    $admin=new adminHome();
    $admin->afficher_adminHome($infos);
    }
}