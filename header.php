<?php
$current_page = basename($_SERVER['PHP_SELF']); // current file ka name nikalta hai
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column p-0">

  <!-- 🔹 Top Row -->
  <div class="w-100 text-center py-2 border-bottom">
    <h3 class="text-light m-0">📦 Inventory Management System</h3>
  </div>

  <!-- 🔹 Bottom Row -->
  <div class="container-fluid">
    <ul class="navbar-nav flex-row py-2 mb-0">
      <li class="nav-item">
        <a class="nav-link px-3 <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="/inventory/index.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 <?= ($current_page == 'list.php' && strpos($_SERVER['REQUEST_URI'], '/items/') !== false) ? 'active' : '' ?>" href="/inventory/items/list.php">Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 <?= ($current_page == 'add.php' && strpos($_SERVER['REQUEST_URI'], '/sales/') !== false) ? 'active' : '' ?>" href="/inventory/sales/add.php">Add Sale</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 <?= ($current_page == 'list.php' && strpos($_SERVER['REQUEST_URI'], '/sales/') !== false) ? 'active' : '' ?>" href="/inventory/sales/list.php">Sales List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 <?= ($current_page == 'logout.php') ? 'active' : '' ?>" href="/inventory/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<!-- 🔹 Custom CSS -->
<style>
  .navbar {
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
  }
  .navbar-nav .nav-link {
    color: #ccc !important;
    font-weight: 500;
    transition: all 0.3s ease;
  }
  .navbar-nav .nav-link:hover {
    color: #fff !important;
    text-decoration: underline;
  }
  /* ✅ Highlight active page */
  .navbar-nav .nav-link.active {
    color: #0d6efd !important;
    font-weight: 600;
    border-bottom: 2px solid #0d6efd;
  }
</style>
