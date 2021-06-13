<?php
require_once "db.php";
class Article
{
    public $heading;
    public $text;
    public $id;
    public $created;
    public function __construct($id, $heading, $text, $created)
    {
        $this->heading = $heading;
        $this->text = $text;
        $this->id = $id;
        $this->created = $created;
    }
    public function __toString()
    {
        return "<article>
                <h2>$$this->heading</h2>
                <p>$$this->text</p>
            </article>";
    }
    public static function create($heading, $text)
    {
        $conn = db_connect();

        // prepare and bind
        $stmt = $conn->prepare(
            "INSERT INTO `Articles` (`id`, `title`, `body`, `created`) VALUES (NULL, ? , ?, CURRENT_DATE());"
        );
        $stmt->bind_param("ss", $heading, $text);
        $stmt->execute();

        $stmt->close();
        $conn->close();
        return read_id($conn->insert_id);
    }
    public static function read_id($id)
    {
        $id = (int) $id;
        $conn = db_connect();
        $sql = "SELECT * FROM Articles
            WHERE id=$id;";
        $result = $conn->query($sql);
        $article = null;
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $article = new Article(
                $row["id"],
                $row["title"],
                $row["body"],
                $row["created"]
            );
        } else {
            echo "0 results";
        }

        $conn->close();
        return $article;
    }
    public static function read_all()
    {
        $conn = db_connect();
        $sql = "SELECT * FROM Articles;";
        $result = $conn->query($sql);
        $articles = [];
        for ($i = 0; $i < $result->num_rows; $i++) {
            $row = $result->fetch_assoc();
            $articles[] = new Article(
                $row["id"],
                $row["title"],
                $row["body"],
                $row["created"]
            );
        }

        $conn->close();
        return $articles;
    }

    public function save()
    {
        $id = (int) $this->$id;
        $conn = db_connect();
        $sql = "UPDATE Articles
        SET title = {$this->$title}, body = {$this->$body}, created = {$this->$created}
        WHERE id=$id;";
        if ($conn->query($sql) === true) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    public function delete()
    {
        $id = (int) $this->$id;
        $conn = db_connect();
        $sql = "DELETE FROM Articles WHERE id=$id;";
        if ($conn->query($sql) === true) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
    }
}
?>


