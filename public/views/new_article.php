
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
Title: <input type="text" name="title">
Body: <textarea name="body" cols="40" rows="5"></textarea>
<input type="submit">
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    require_once $_SERVER['DOCUMENT_ROOT']."/models/articles.php";


    $title = $_POST["body"];
    $body = $_POST["body"];
    if (empty($body) or empty($title)) {
        echo "заполните все!";
    } else {

        $id = Article::create($title,$body);
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: https://$host/article.php?id=$id");
        exit;
    }
}


?>
