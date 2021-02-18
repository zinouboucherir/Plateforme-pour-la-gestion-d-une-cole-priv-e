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

$ROOT_DIR = dirname(__DIR__);
$STORAGE_DIR = dirname(__DIR__).'/storage/images/';

require_once $ROOT_DIR.'/vendor/autoload.php';


$app = new Application($ROOT_DIR,$STORAGE_DIR);

// define Routes

$app->router->get('/',[HomeController::class,'index']); 
$app->router->get('/admin',[AdminHomeController::class,'index']);
$app->router->get('/adminArticles',[AdminArticleController::class,'index']);
$app->router->post('/addArticles',[AdminArticleController::class,'addArticles']);    // HOME PAGE :: /
$app->router->get('/home',[HomeController::class,'index']); 
$app->router->get('/showarticle',[ShowArticleController::class,'ShowArticle']); 
$app->router->get('/Articledelete',[AdminArticleController::class,'supprimerArticle']); 
$app->router->post('/Articleupdate',[AdminArticleController::class,'editArticles']);

$app->router->get('/adminPresentation',[AdminPresentationController::class,'index']);
$app->router->post('/addPresentation',[AdminPresentationController::class,'addPresentation']);
$app->router->get('/presentationdelete',[AdminPresentationController::class,'supprimerPresentation']); 
$app->router->post('/presentationupdate',[AdminPresentationController::class,'editPresentation']); 
$app->router->get('/presentation',[PresentationController::class,'index']);

$app->router->get('/primaire',[PrimaireController::class,'index']);
$app->router->get('/moyen',[MoyenController::class,'index']);
$app->router->get('/secondaire',[SecondaireController::class,'index']);

// HOME PAGE :: /home
$app->router->get('/contact',[ContactController::class , 'index']);  // CoONTACT PAGE :: /contact
$app->router->post('/contact',[ContactController::class, 'post']);
$app->router->get('/login',[AuthController::class, 'login']);
$app->router->post('/login',[AuthController::class, 'login']);
$app->router->get('/register',[AuthController::class, 'register']);
$app->router->post('/register',[AuthController::class, 'register']);


// end Routes


$app->run();

