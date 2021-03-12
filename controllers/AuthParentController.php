<?php
namespace app\controllers;
use app\core\Request;
use app\models\UserManager;
class AuthParentController extends Controller {

    public function login(Request $request)
    {
     if ($request->isGet())
    {
        session_start();
        if(isset($_SESSION['Parent']))
        {
        header('location:parent');
        $this->render('parent');
        }
    else{
        return $this->render('parentlogin');
        }   
    }

    }
    public function connect()
    { 
            session_start();
               if (empty($_POST['username']) || empty($_POST['password']))
               {
                $userManager=new UserManager();

                header("location:parentlogin?Empty=introduisez le nom d'utilisateur et le mot de passe!");
               }
               else
               {
                   $userManager=new UserManager();
                   $requete=$userManager->getUser($_POST['username'],$_POST['password'],3);
                   $result=$requete->fetch((\PDO::FETCH_ASSOC));   
                   if(!empty($result))
                   {
                    $_SESSION['Parent']=$result['id'];
                    header('location:parent');
                    $this->render('parent');
                   }
                   else
                   {
                    header("location:parentlogin?invalid=svp vous plait entrer un nom d'utilisateur et un mot de passe correctes");
                   } 
               }
               

    }
    public function disconnect(){
        session_start();
        unset($_SESSION["Parent"]);
        $this->render('parentlogin');
    }
}