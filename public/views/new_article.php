
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
Name: <input type="text" name="fname">
Surname: <input type="text" name="lname">
<input type="submit">
</form>

<?php
function save($line)
{
    ($file_people = fopen("people.txt", "a")) or die("Unable to open file!");
    fwrite($file_people, "$line\n");
    fclose($file_people);
    return true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $surname = $_POST["lname"];
    $name = $_POST["fname"];
    if (empty($name) or empty($surname)) {
        echo "Name is empty";
    } else {
        if (save("$name $surname")) {
            echo "все ок";
        }
    }
}


?>
