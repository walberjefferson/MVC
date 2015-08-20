<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home'] = ['route' => '/', 'controller' => 'index', 'action' => 'index'];
        $ar['empresa'] = ['route' => '/empresa', 'controller' => 'index', 'action' => 'empresa'];
        $this->setRoutes($ar);
    }

    public static function getDb(){
        $db = new \PDO('mysql:host=localhost;dbname=mvc', 'root', 'root');
        return $db;
    }
}