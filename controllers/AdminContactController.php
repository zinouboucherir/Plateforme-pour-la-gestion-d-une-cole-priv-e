<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\models\ContactManager;
class AdminContactController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $contactManager=new ContactManager();
        $telephone = $contactManager->getTelephones();
        $faxs = $contactManager->getFax();
        $emails = $contactManager->getEmail();
        $adresse = $contactManager->getAdresse();
        $params = [
         'telephones'=>$telephone,
         'faxs' =>$faxs,
         'emails' =>$emails,
         'adresse'=>$adresse,
        ];
        $this->render('adminContact',$params);
    }

    public function addTelephone()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $telephoneManager=new ContactManager();
        $telephoneManager->insertTelephone($_POST['numero']);
        header('location:adminContact');
    }
    public function addFax()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $faxManager=new ContactManager();
        $faxManager->insertFax($_POST['fax']);
        header('location:adminContact');
    }
    public function addEmail()
    {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $emailManager=new ContactManager();
        $emailManager->insertEmail($_POST['email']);
        header('location:adminContact');
    }
    public function supprimerTelephone() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $contactManager=new ContactManager();
        $contactManager->deleteTelephone($id);
        header('location:adminContact');
    }
    public function supprimerFax() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $contactManager=new ContactManager();
        $contactManager->deleteFax($id);
        header('location:adminContact');
    }
    public function supprimerEmail() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $contactManager=new ContactManager();
        $contactManager->deleteEmail($id);
        header('location:adminContact');
    }
    public function supprimerAdresse() {
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }
        $id=$_GET['id'];
        $contactManager=new ContactManager();
        $contactManager->deleteAdresse($id);
        header('location:adminContact');
    }

    public function editTelephone(Request $request)
    {   
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }     
        $telephoneManager=new ContactManager();
        $telephoneManager->updateTelephone($_POST['id'],$_POST['numero']);
    
        header('location:adminContact');
    }
    public function editFax(Request $request)
    {   
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }     
        $telephoneManager=new ContactManager();
        $telephoneManager->updateFax($_POST['id'],$_POST['fax']);
        header('location:adminContact');
    }
    public function editEmail(Request $request)
    {   
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }     
        $telephoneManager=new ContactManager();
        $telephoneManager->updateEmail($_POST['id'],$_POST['email']);

        header('location:adminContact');
    }
    public function editAdresse(Request $request)
    {   
        session_start();
        if(!isset($_SESSION['User']))
        {
            header('location:login');
            exit();
        }     
        $telephoneManager=new ContactManager();
        $telephoneManager->updateAdresse($_POST['id'],$_POST['adresse']);
        
        header('location:adminContact');
    }
}