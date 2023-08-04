<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
// Replace 'your_database_username', 'your_database_password', and 'your_database_name' with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meerakh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the input data from the login form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize input data to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password (assuming you're using plain MD5 hashing, which is not recommended for production)
    $hashedPassword = md5($password);

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashedPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // User found, redirect to a dashboard or another page
        header("Location: dashboard.php");
        exit();
    } else {
        // User not found or incorrect credentials, redirect back to the login page
        header("Location: login.php?login_error=1");
        exit();
    }
}

$conn->close();
?>


<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard!</h1>
    <p>You have successfully logged in.</p>
</body>
</html>



