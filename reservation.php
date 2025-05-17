<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Desi"; // Make sure this matches EXACTLY in phpMyAdmin

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$msg = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username && $password) {
        // Prepare the query
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        
        // Check if prepare() succeeded
        if (!$stmt) {
            die("SQL prepare failed: " . $conn->error);
        }

        // Bind and execute
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashed_password)) {
                $msg = "✅ Welcome, <strong>$username</strong>! Login successful.";
                // You can start session or redirect here
            } else {
                $msg = "❌ Incorrect password.";
            }
        } else {
            $msg = "❌ Username not found.";
        }
        $stmt->close();
    } else {
        $msg = "⚠️ Please enter both username and password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - The Desi Dhaba</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #f9d423, #ff4e50);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            width: 320px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        .login-box h2 {
            text-align: center;
            color: #333;
        }
        input, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            background-color: #ff4e50;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #e33d3f;
        }
        .message {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }
        .links {
            text-align: center;
            margin-top: 15px;
        }
        .links a {
            text-decoration: none;
            color: #ff4e50;
            margin: 0 8px;
        }
    </style>
</head>
<body>
<div class="login-box">
    <h2>Login</h2>
    <?php if ($msg): ?>
        <div class="message"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <div class="links">
        <a href="index.php">← Home</a> |
        <a href="signup.php">Sign Up</a>
    </div>
</div>
</body>
</html>
