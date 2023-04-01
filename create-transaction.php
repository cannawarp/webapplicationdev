<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
</head>
<body>
  <div class="center-user">
    <div class="container">
      <form method="POST" action="processes/process.order.php?action=create">
  <div class="title">Registration</div>
  <form class="#">
  <div class="user-details">
      <div class="input-box">
        <span class="details">Cutomer Name</span>
        <input type="text"  id="fname" class="input" name="sname" placeholder="Customer Name" required>
      </div>
      <div class="input-box">
        <span class="details">Description</span>
        <input type="text" id="fname" class="input" name="desc" placeholder="Description" required>
      </div>
      <div class="input-box">
        <span class="details">Amount</span>
        <input type="text" id="fname" class="input" name="amount" placeholder="Amount" required>
      </div>
      </div>
  <div class="button">
    <input type="submit" value="Create">
  </div>
  </form>
      </form>
    </div>
  </div>
</body>
</html>