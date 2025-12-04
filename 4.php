<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>

<form method="post">
    Enter a word:
    <input type="text" name="word" required>
    <input type="submit" value="Reverse">
</form>

<?php
if (isset($_POST["word"])) {
    $word = $_POST["word"];
    $reverse = "";

    for ($i = strlen($word) - 1; $i >= 0; $i--) {
        $reverse .= $word[$i];
    }

    echo "Reversed String: " . $reverse;
}
?>

</body>
</html>
