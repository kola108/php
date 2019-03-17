<?php

require 'AbstractController.php';
require 'HomeController.php';
require 'ArticlesController.php';
require 'ProductsController.php';
require 'NotFoundController.php';
require 'Model.php';

class Router {
    private $currentRoute;
    private $controllerName;

    public function navigate($str) {
        $this->currentRoute = $str;
        switch ($this->currentRoute) {
            case null:
            case 'home':
                $this->controllerName = HomeController::class;
                break;
            case 'products':
                $this->controllerName = ProductsController::class;
                break;
            case 'articles':
                $this->controllerName = ArticlesController::class;
                break;

            default:
                $this->controllerName = NotFoundController::class;
                break;
        }
        
        $this->doNavigation();
    }

    private function doNavigation() {
        $controller = new $this->controllerName;
    }
}