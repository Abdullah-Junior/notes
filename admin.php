<?php
require 'db.php';
$result = $conn->query("SELECT * FROM users ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin - Leads</title>
  <style>
    body { font-family: Arial; background: #f2f2f2; padding: 20px; }
    table { width: 100%; border-collapse: collapse; background: #fff; }
    th, td { padding: 12px; border: 1px solid #ccc; }
    th { background-color: #0073e6; color: white; }
  </style>
</head>
<body>
  <h2>Lead Submissions</h2>
  <table>
    <tr><th>ID</th><th>Name</th><th>Phone</th><th>Date</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['name']) ?></td>
      <td><?= htmlspecialchars($row['phone']) ?></td>
      <td><?= $row['created_at'] ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
