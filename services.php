<?php
$name  = $_GET['name'] ?? 'Guest';
$phone = $_GET['phone'] ?? 'Not Provided';
?>
<!DOCTYPE html>
<html>
<head>
  <title>ProFix Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: Arial; background: #f9f9f9; color: #333; margin: 0; }
    header { background-color: #0073e6; color: white; padding: 20px; text-align: center; }
    .user-info { text-align: center; background: #e6f0ff; padding: 15px; margin: 15px auto; max-width: 700px; border-left: 4px solid #005bb5; }
    .section { background: #fff; margin: 20px auto; max-width: 800px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    h2 { color: #005bb5; }
    footer { background: #333; color: #fff; text-align: center; padding: 20px; margin-top: 40px; }
  </style>
</head>
<body>
<header>
  <h1>ProFix Home Services</h1>
</header>
<div class="user-info">
  <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
  <p><strong>Phone:</strong> <?= htmlspecialchars($phone) ?></p>
</div>
<div class="section"><h2>Roofing</h2><p>Contact: <strong>[Roofing Phone]</strong></p></div>
<div class="section"><h2>HVAC</h2><p>Contact: <strong>[HVAC Phone]</strong></p></div>
<div class="section"><h2>Plumbing</h2><p>Contact: <strong>[Plumbing Phone]</strong></p></div>
<div class="section"><h2>Electrical</h2><p>Contact: <strong>[Electrical Phone]</strong></p></div>
<footer><p>&copy; 2025 ProFix Home Services</p></footer>
</body>
</html>
