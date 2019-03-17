<? foreach ($templateData as $articles) { ?>
    <div class="content-item">
        <h3><? echo $articles["name"]?></h3>
        <p><? echo $articles["comments"]?></p>
    </div>
<? } ?>

