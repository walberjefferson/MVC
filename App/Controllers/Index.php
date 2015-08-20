<?php

namespace App\Controllers;

use SON\Controller\Action;

class Index extends Action
{
    public function index()
    {
        $nomes = array();
        $nomes[] = "Walber";
        $nomes[] = "Jefferson";

        $this->view->nomes = $nomes;

        $this->render('index');
    }

    public function empresa()
    {
        $this->render('empresa');
    }

}