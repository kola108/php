<?php
require 'Model.php';
require 'AbstractController.php';
require 'MainController.php';
require 'BlogController.php';

$page = filter_input(INPUT_GET, 'page');  // $_GET['page'];

switch ($page) {
	case null:
	case 'index':
		$controllerName = MainController::class;
		$method = 'index';
		break;
	case 'about-us':
		$controllerName = MainController::class;
		$method = 'aboutUs';
		break;
//blog
	case 'blog':
		$controllerName = BlogController::class;
		$method = 'blog';
		break;
	case 'article':
		$controllerName = BlogController::class;
		$method = 'article';
		break;

	default:
		$controllerName = MainController::class;
		$method = 'pageNotFound';
		break;
}

$controller = new $controllerName();
$controller->$method();