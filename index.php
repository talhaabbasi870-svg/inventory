<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$statsQ = $con->query("SELECT COUNT(*) AS total, 
                              SUM(quantity) AS total_qty,
                              SUM(CASE WHEN quantity <= reorder_level THEN 1 ELSE 0 END) AS low_stock 
                       FROM items");
$stats = $statsQ->fetch_assoc();
?>
<!doctype html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container mt-4">
  <h1>Dashboard</h1>
  <div class="row">
    <div class="col-md-4"><div class="card p-3">Total items: <?= $stats['total'] ?></div></div>
    <div class="col-md-4"><div class="card p-3">Total quantity: <?= $stats['total_qty'] ?></div></div>
    <div class="col-md-4"><div class="card p-3">Low stock: <?= $stats['low_stock'] ?></div></div>
  </div>
  <a href="items/list.php" class="btn btn-primary mt-3">Manage Items</a>
</div>
<script src="/inventory/assets/js/index.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>
