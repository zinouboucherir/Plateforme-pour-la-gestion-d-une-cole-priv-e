<?php
namespace app\controllers;
use app\core\Request;
use app\models\UserManager;
class AuthEleveController extends Controller {

    public function login(Request $request)
    {
     if ($request->isGet())
    {
        session_start();
        if(isset($_SESSION['Eleve']))
        {
        header('location:eleve');
        $this->render('eleve');
        }
    else{
        return $this->render('elevelogin');
        }   
    }

    }
    public function connect()
    { 
            session_start();
               if (empty($_POST['username']) || empty($_POST['password']))
               {
                $userManager=new UserManager();

                $params = [
                    'empty' => "introduisez le nom d'utilisateur et le mot de passe!",
                ];
                $this->render('elevelogin',$params);
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
                    $this->render('eleve');
                   }
                   else
                   {
                    $params = [
                        'invalid' => "svp vous plait entrer un nom d'utilisateur et un mot de passe correctes",
                    ];
                    $this->render('elevelogin',$params);
                   } 
               }
               

    }
    public function disconnect(){
        session_start();
        unset($_SESSION["Eleve"]);
        $this->render('elevelogin');
    }
}