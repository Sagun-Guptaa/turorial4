<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    if ($username === "admin" && $password === "1234@admin") {
        echo "<p style='color:green;'>Welcome Admin</p>";
    } else {
        echo "<p style='color:red;'>Invalid credentials</p>";
    }
}
?>

</body>
</html>
