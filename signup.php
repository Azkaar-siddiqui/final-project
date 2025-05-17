<?php
// Database connection settings
$host = "localhost";
$user = "root";
$pass = "";
$db = "Desi";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Message initialization
$msg = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($username) && !empty($password)) {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare insert statement
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

        // Check if prepare() was successful
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters and execute
        $stmt->bind_param("ss", $username, $hashed_password);
        if ($stmt->execute()) {
            $msg = "✅ Account created successfully for <strong>$username</strong>!";
        } else {
            $msg = "❌ Error inserting data: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $msg = "❌ Please fill in all fields.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - Desi Dhaba</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ffecd2, #fcb69f);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #444;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            background-color: #ff7f50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff6347;
        }
        .message {
            margin-top: 15px;
            text-align: center;
            color: green;
        }
        .error {
            color: red;
        }
        .link {
            text-align: center;
            margin-top: 10px;
        }
        .link a {
            text-decoration: none;
            color: #333;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="signup-box">
    <h2>Create Account</h2>
    <?php if (!empty($msg)): ?>
        <div class="message"><?php echo $msg; ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Sign Up</button>
    </form>

    <div class="link">
        <a href="login.php">Already have an account? Login</a>
    </div>
</div>

</body>
</html>
