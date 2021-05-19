<?php require("articles.php"); $articles = [new Article(12, 'Статья 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo urna eget magna interdum vestibulum. Duis et purus et velit maximus vehicula. Nunc nisl sapien, vulputate at auctor quis, pulvinar quis erat.', '2021-05-19T04:09:45Z'), new Article(14, 'Статья 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo urna eget magna interdum vestibulum. Duis et purus et velit maximus vehicula. Nunc nisl sapien, vulputate at auctor quis, pulvinar quis erat.', '2021-05-18T04:09:45Z')];?>

<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <h1>
      Оглавление    
    </h1>
    <main>
    <?php foreach ($articles as $article):?>
    <article>
    <a href="/article/<?=$article->id;?>">
        <h2><?=$article->heading;?></h2>
    </a> 
        <p><?=$article->text;?></p>
     </article>  
     <?php endforeach; ?>      
    </main>

  </body>
</html>