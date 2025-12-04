<!DOCTYPE html>
<html>
<head>
    <title>User Info Preview</title>
</head>
<body>

<form method="post">
    Name:
    <input type="text" name="name"><br><br>

    Age:
    <input type="number" name="age"><br><br>

    Favorite Programming Language:
    <input type="text" name="language"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $language = trim($_POST["language"]);

    if ($name == "" || $age == "" || $language == "") {
        echo "All fields are required.";
    } elseif ($age <= 0) {
        echo "Please enter a valid age.";
    } else {
        echo "<h3>User Info Preview</h3>";
        echo "Name: $name <br>";
        echo "Age: $age <br>";
        echo "Favorite Language: $language";
    }
}
?>

</body>
</html>
