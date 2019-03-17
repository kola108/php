<?php

class Model {
    private $info = [
        'title' => 'My shop',
        'description' => 'This is my test shop where you can find test products and test articles about them'
    ];

    private $products = [
        1 => ['name'=>'Product 1', 'description'=>'test description 1', 'img'=>'img/product1.gif'],
        2 => ['name'=>'Product 2', 'description'=>'test description 2', 'img'=>'img/product2.gif'],
        3 => ['name'=>'Product 3', 'description'=>'test description 3', 'img'=>'img/product3.gif'],
        4 => ['name'=>'Product 4', 'description'=>'test description 4', 'img'=>'img/product4.gif'],
        5 => ['name'=>'Product 5', 'description'=>'test description 5', 'img'=>'img/product5.gif'],
        6 => ['name'=>'Product 6', 'description'=>'test description 6', 'img'=>'img/product6.gif'],
    ];

    private $articles = [
        1 => ['name'=>'article 1', 'comments'=>'test comment 1'],
        2 => ['name'=>'article 2', 'comments'=>'test comment 2'],
        3 => ['name'=>'article 3', 'comments'=>'test comment 3'],
        4 => ['name'=>'article 4', 'comments'=>'test comment 4'],
        5 => ['name'=>'article 5', 'comments'=>'test comment 5'],
        6 => ['name'=>'article 6', 'comments'=>'test comment 6'],
    ];

    public function getInfo() {
        return $this->info;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getProduct($id) {
        return $this->products[$id];
    }

    public function getArticles() {
        return $this->articles;
    }

    public function getArticle($id) {
        return $this->articles[$id];
    }
}