<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
</head>
<body>

<form method="post">
    Enter a sentence:
    <input type="text" name="sentence" required>
    <input type="submit" value="Count Vowels">
</form>

<?php
if (isset($_POST["sentence"])) {
    $sentence = strtolower($_POST["sentence"]);
    $count = 0;

    for ($i = 0; $i < strlen($sentence); $i++) {
        if ($sentence[$i] == 'a' || $sentence[$i] == 'e' || $sentence[$i] == 'i' || $sentence[$i] == 'o' || $sentence[$i] == 'u') {
            $count++;
        }
    }

    echo "Number of vowels: " . $count;
}
?>

</body>
</html>
