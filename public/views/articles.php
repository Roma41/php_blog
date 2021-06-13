<?php require_once $_SERVER['DOCUMENT_ROOT']."/models/articles.php";
$articles = Article::read_all();
?>


    <main>
    <?php foreach ($articles as $article): ?>
    <article>
    <a href="/article/<?= $article->id ?>">
        <h2><?= $article->heading ?></h2>
    </a> 
        <p><?= $article->text ?></p>
     </article>  
     <?php endforeach; ?>      
    </main>

  