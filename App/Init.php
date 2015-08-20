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
}