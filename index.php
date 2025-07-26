<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "INSERT INTO users (name, phone) VALUES ('$name', '$phone')";
    if ($conn->query($sql) === TRUE) {
        header("Location: services.php?name=" . urlencode($name) . "&phone=" . urlencode($phone));
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Enter Your Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: Arial; background: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; }
    form { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); text-align: center; }
    input { width: 80%; padding: 10px; margin: 10px 0; }
    button { padding: 10px 20px; background-color: #0073e6; color: white; border: none; cursor: pointer; }
  </style>
</head>
<body>
<form method="POST" action="">
  <h2>Welcome to ProFix</h2>
  <p>Enter your details to continue:</p>
  <input type="text" name="name" placeholder="Your Name" required><br>
  <input type="tel" name="phone" placeholder="Your Phone (+1234567890)" required pattern="^\+?\d{7,15}$"><br>
  <button type="submit">Continue</button>
</form>
</body>
</html>
