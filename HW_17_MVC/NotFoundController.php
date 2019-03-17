<?php

class NotFoundController extends AbstractController {
    public function goToTheNotFoundPage() {
        http_response_code(404);
        $this->render('view/404.php');
    }
    public function __construct() {
        $this->goToTheNotFoundPage();
    }
}