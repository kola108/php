<? foreach ($templateData as $product) { ?>
    <div class="content-item">
        <img src=<? echo $product["img"] ?>>
        <h3><? echo $product["name"]?></h3>
        <p><? echo $product["description"]?></p>
    </div>
<? } ?>

