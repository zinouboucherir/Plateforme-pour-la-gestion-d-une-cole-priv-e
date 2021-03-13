<?php
namespace app\controllers;
use app\core\Request;
use app\models\UserManager;
use app\views\elevelogin;
class AuthEleveController extends Controller {

    public function login(Request $request)
    {
     if ($request->isGet())
    {
        session_start();
        if(isset($_SESSION['Eleve']))
        {
        header('location:eleve');
        }
    else{
        $login=new elevelogin();
        $login->afficher_elevelogin();
        }   
    }

    }
    public function connect()
    { 
            session_start();
               if (empty($_POST['username']) || empty($_POST['password']))
               {
                $userManager=new UserManager();

                header("location:elevelogin?Empty=introduisez le nom d'utilisateur et le mot de passe!");
               }
               else
               {
                   $userManager=new UserManager();
                   $requete=$userManager->getUser($_POST['username'],$_POST['password'],2);
                   $result=$requete->fetch((\PDO::FETCH_ASSOC));   
                   if(!empty($result))
                   {
                    $_SESSION['Eleve']=$result['id'];
                    header('location:eleve');
                   }
                   else
                   {
                    header("location:elevelogin?invalid=svp vous plait entrer un nom d'utilisateur et un mot de passe correctes");
                   } 
               }
               

    }
    public function disconnect(){
        session_start();
        unset($_SESSION["Eleve"]);
        $login=new elevelogin();
        $login->afficher_elevelogin();
    }
}