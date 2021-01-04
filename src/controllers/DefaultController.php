<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function authors()
    {
        $this->render('authors');
    }

    public function lists()
    {
        $this->render('lists');
    }

    public function user()
    {
        $this->render('user');
    }
}