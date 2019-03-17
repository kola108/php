<?php
    echo '<link rel="stylesheet" href="css/main.css">';
    echo '<script src="js/main.js"></script>';
?>
<div class="header-nav">
    <nav>
        <a href="?page=home" class="header-nav-link" id="home-link">Home</a>
        <a href="?page=products" class="header-nav-link" id="products-link">Products</a>
        <a href="?page=articles" class="header-nav-link" id="articles-link">Articles</a>
    </nav>
</div>
<div class="content">
    <?php
    require 'Router.php';
    $router = new Router();
    $page = filter_input(INPUT_GET, 'page');
    $router->navigate($page);
    ?>
</div>


