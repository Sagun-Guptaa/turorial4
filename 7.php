<!DOCTYPE html>
<html>
<head>
    <title>Basic Validation</title>
</head>
<body>

<form method="post">
    Full Name:
    <input type="text" name="fullname"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);

    if ($fullname == "" || $email == "") {
        echo "<p style='color:red;'>Both fields are required.</p>";
    } else {
        echo "<p style='color:green;'>All good!</p>";
    }
}
?>

</body>
</html>
