<?php

class ProductsController extends AbstractController {
    public function goToTheProductPage() {
        $model = $this->getModel(Model::class);
        $products = $model->getProducts();
        $this->render('view/products.php', $products);
    }
    public function __construct() {
        $this->goToTheProductPage();
    }
}