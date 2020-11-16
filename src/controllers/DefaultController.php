<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function authors()
    {
        $this->render('authors');
    }

    public function books()
    {
        $this->render('books');
    }

    public function lists()
    {
        $this->render('lists');
    }

    public function login()
    {
        $this->render('login');
    }

    public function user()
    {
        $this->render('user');
    }
}