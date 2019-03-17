<?php

class HomeController extends AbstractController {
    public function goToTheHomePage() {
        $model = $this->getModel(Model::class);
        $info = $model->getInfo();
        $this->render('view/home.php', $info);
    }
    public function __construct() {
        $this->goToTheHomePage();
    }
}