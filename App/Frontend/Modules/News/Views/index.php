<?php
foreach ($listeNews as $news)
{
?>
  <h2><a href="bootstrap.php/news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
  <p><?= nl2br($news['contenu']) ?></p>
<?php
}
