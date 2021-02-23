<?php
use app\core\Application;
use app\controllers\HomeController;
use app\controllers\AdminHomeController;
use app\controllers\AdminArticleController;
use app\controllers\ContactController;
use app\controllers\AuthController;
use app\controllers\ShowArticleController;
use app\controllers\AdminPresentationController;
use app\controllers\PresentationController;
use app\controllers\PrimaireController;
use app\controllers\SecondaireController;
use app\controllers\MoyenController;
use app\controllers\AdminEmploiController;
use app\controllers\EmploiController;
use app\controllers\AdminRestauController;
use app\controllers\RestauController;
use app\controllers\AuthEleveController;
use app\controllers\EleveController;
use app\controllers\AuthParentController;
use app\controllers\ParentController;
use app\controllers\AdminUsersController;
use app\controllers\AdminClassesController;
$ROOT_DIR = dirname(__DIR__);
$STORAGE_DIR = dirname(__DIR__).'/storage/images/';

require_once $ROOT_DIR.'/vendor/autoload.php';


$app = new Application($ROOT_DIR,$STORAGE_DIR);

// define Routes

$app->router->get('/',[HomeController::class,'index']); 
$app->router->get('/adminHome',[AdminHomeController::class,'index']);
$app->router->get('/adminArticles',[AdminArticleController::class,'index']);
$app->router->post('/addArticles',[AdminArticleController::class,'addArticles']);    // HOME PAGE :: /
$app->router->get('/home',[HomeController::class,'index']); 
$app->router->get('/showarticle',[ShowArticleController::class,'ShowArticle']); 
$app->router->get('/Articledelete',[AdminArticleController::class,'supprimerArticle']); 
$app->router->post('/Articleupdate',[AdminArticleController::class,'editArticles']);
$app->router->get('/adminUsers',[AdminUsersController::class,'index']);

$app->router->get('/adminClasse',[AdminClassesController::class,'index']);
$app->router->post('/addClasse',[AdminClassesController::class,'addClasse']);
$app->router->get('/classedelete',[AdminClassesController::class,'supprimerClasse']); 
$app->router->post('/classeupdate',[AdminClassesController::class,'editClasse']); 


$app->router->get('/adminPresentation',[AdminPresentationController::class,'index']);
$app->router->post('/addPresentation',[AdminPresentationController::class,'addPresentation']);
$app->router->get('/presentationdelete',[AdminPresentationController::class,'supprimerPresentation']); 
$app->router->post('/presentationupdate',[AdminPresentationController::class,'editPresentation']); 
$app->router->get('/presentation',[PresentationController::class,'index']);

$app->router->get('/primaire',[PrimaireController::class,'index']);
$app->router->get('/moyen',[MoyenController::class,'index']);
$app->router->get('/secondaire',[SecondaireController::class,'index']);

$app->router->get('/adminEmploi',[AdminEmploiController::class,'index']);
$app->router->post('/addEmploi',[AdminEmploiController::class,'addEmploi']);
$app->router->get('/emploidelete',[AdminEmploiController::class,'supprimerEmploi']); 
$app->router->post('/emploiupdate',[AdminEmploiController::class,'editEmploi']); 


$app->router->get('/adminRestau',[AdminRestauController::class,'index']);
$app->router->post('/addRestau',[AdminRestauController::class,'addRestau']);
$app->router->get('/restaudelete',[AdminRestauController::class,'supprimerRestau']); 
$app->router->post('/restauupdate',[AdminRestauController::class,'editRestau']); 
$app->router->get('/restauration',[RestauController::class,'index']);

$app->router->get('/emploiPrimaire',[EmploiController::class,'getPrimaireEmploi']);
$app->router->get('/emploiMoyen',[EmploiController::class,'getMoyenEmploi']); 
$app->router->get('/emploiSecondaire',[EmploiController::class,'getSecondaireEmploi']); 
// HOME PAGE :: /home
$app->router->get('/contact',[ContactController::class , 'index']);  // CoONTACT PAGE :: /contact
$app->router->post('/contact',[ContactController::class, 'post']);
$app->router->get('/login',[AuthController::class,'login']);
$app->router->post('/login',[AuthController::class,'connect']);
$app->router->get('/logout',[AuthController::class,'disconnect']);
$app->router->get('/register',[AuthController::class, 'register']);
$app->router->post('/register',[AuthController::class, 'register']);


$app->router->get('/elevelogin',[AuthEleveController::class,'login']);
$app->router->post('/elevelogin',[AuthEleveController::class,'connect']);
$app->router->get('/elevelogout',[AuthEleveController::class,'disconnect']);
$app->router->get('/eleve',[EleveController::class,'index']);

$app->router->get('/emploiEleve',[EleveController::class,'getEleveEmploi']);
$app->router->get('/eleveinfos',[EleveController::class,'infoseleve']);
$app->router->get('/elevenote',[EleveController::class,'noteEleve']);

$app->router->get('/parentlogin',[AuthParentController::class,'login']);
$app->router->post('/parentlogin',[AuthParentController::class,'connect']);
$app->router->get('/parentlogout',[AuthParentController::class,'disconnect']);
$app->router->get('/parent',[ParentController::class,'index']);

$app->router->get('/parentinfos',[ParentController::class,'infosparent']);
$app->router->get('/emploiParent',[ParentController::class,'getParentEmploi']);
$app->router->get('/parentnote',[ParentController::class,'noteParent']);
// end Routes


$app->run();

