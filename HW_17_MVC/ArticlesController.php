<?php

class ArticlesController extends AbstractController {
    public function goToTheArticlesPage() {
        $model = $this->getModel(Model::class);
        $articles = $model->getArticles();
        $this->render('view/articles.php', $articles);
    }
    public function __construct() {
        $this->goToTheArticlesPage();
    }
}