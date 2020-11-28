<?php

require_once 'AppController.php';

class BookController extends AppController {

    public function addBook()
    {
        $this->render("add-book");
    }
}