<!DOCTYPE html>
<html>
<head>
    <title>Manual Email Check</title>
</head>
<body>

<form method="post">
    Enter Email:
    <input type="text" name="email">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if ($email == "") {
        echo "Email is required.";
    } elseif (strpos($email, "@") === false || strpos($email, ".") === false || strpos($email, "@") == 0) {
        echo "Email format incorrect (basic check).";
    } else {
        echo "Email format looks correct.";
    }
}
?>

</body>
</html>

