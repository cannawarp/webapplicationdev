<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #f1f1f1;
  position: absolute;
  min-height: cover;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 30px 20px;
  text-decoration: none;
  text-align: center;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
  animation-delay: 2s;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
</head>
<body>
  <div class="header">
<h2>Spice N' Wings Ordering System</h2>
</div>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="index.php?page=order">Orders</a></li>
  <li><a href="index.php?page=sales">Sales</a></li>
  <li><a href="index.php?page=product">Products</a></li>
  <li><a href="index.php?page=users">User</a></li>
  <li><a href="logout.php" class="move-down">Log Out</a></li>
</ul>

</body>
</html>
 