<?php require_once $_SERVER['DOCUMENT_ROOT']."/models/articles.php";
$article = Article::read_id($id);
?>


    <main>
    <article>
        <h2><?= $article->heading ?></h2>
        <p><?= $article->text ?></p>
     </article>   
    </main>

  