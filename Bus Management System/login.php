<?php
include 'connect.php'; // Ensure this points to your connection.php file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Protect against SQL injection
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    // Query to check credentials
    $sql = "SELECT * FROM login_info WHERE username='$username' AND password='$password'";
    $result = $con->query($sql);

    if ($result && $result->num_rows === 1) {
        // Credentials are correct
        $row = $result->fetch_assoc();
        if ($row['counter'] === 'counter') {
            header("Location: counter.php"); // Redirect to counter.php
        } elseif ($row['counter'] === 'admin') {
            header("Location: admin.php"); // Redirect to admin.php
        }
        exit();
    } else {
        // Invalid credentials
        $error = "Invalid username or password. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triple Minds Travels - Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="form-container">
        <h2>Login</h2>
        <?php
        if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
        }
        ?>
        <form method="POST" action="">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
