<ul>
	<?php foreach ($articles as $id => $article) { ?>
	<li><a href="?page=article&id=<?=$id;?>"><?=$article['title'] ?></li>
	<?php } ?>
</ul>