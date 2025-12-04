<!DOCTYPE html>
<html>
<head>
    <title>Registration Preview</title>
</head>
<body>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    Confirm Password: <input type="password" name="confirm_password"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $errors = [];

    if ($name == "") $errors[] = "Name is required.";
    if ($email == "" || strpos($email, "@") === false || strpos($email, ".") === false) $errors[] = "Valid email is required.";
    if ($password == "") $errors[] = "Password is required.";
    if ($confirm_password == "") $errors[] = "Confirm password is required.";
    if ($password !== $confirm_password) $errors[] = "Passwords do not match.";

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<p style='color:red;'>$err</p>";
        }
    } else {
        // Password strength check
        $strength = "Weak";
        if (strlen($password) >= 8 && preg_match('/[0-9]/', $password) && preg_match('/[\W]/', $password)) {
            $strength = "Strong";
        }

        echo "<h3>Registration Preview:</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Password Strength: $strength";
    }
}
?>

</body>
</html>
