<?php
namespace app\controllers;
use app\core\Request;
use app\models\UserManager;
class AuthController extends Controller {

    public function login(Request $request)
    {
     if ($request->isGet())
    {
        session_start();
        if(isset($_SESSION['User']))
        {
        header('location:adminHome');
        $this->render('adminHome');
        }
    else{
        return $this->render('login');
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
                $this->render('login',$params);
               }
               else
               {
                   $userManager=new UserManager();
                   $requete=$userManager->getUser($_POST['username'],$_POST['password'],1);
                   $result=$requete->fetch((\PDO::FETCH_ASSOC));   
                   if(!empty($result))
                   {
                    $_SESSION['User']=$_POST['username'];
                    header('location:adminHome');
                    $this->render('adminHome');
                   }
                   else
                   {
                    $params = [
                        'invalid' => "svp vous plait entrer un nom d'utilisateur et un mot de passe correctes",
                    ];
                    $this->render('login',$params);
                   } 
               }
               

    }
    public function disconnect(){
        session_start();
        session_destroy();
        $this->render('login');
    }


}