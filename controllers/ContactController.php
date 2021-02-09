<?php
namespace app\controllers;
use app\core\Request;

class ContactController extends Controller {
    public  function index()
    {
        $this->render('contact');
    }

    public  function post(Request $request)
    {
        // $this->render('contact');
        $data=$request->all();
        var_dump($data['email']);
        $this->render('contact');
    }
}