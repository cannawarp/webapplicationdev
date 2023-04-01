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
      <form method="POST" action="processes/process-user.php?action=new">
  <div class="title">Registration</div>
  <form class="#">
  <div class="user-details">
      <div class="input-box">
        <span class="details">First Name</span>
        <input type="text"  id="fname" class="input" name="firstname" placeholder="Enter First Name" required>
      </div>
      <div class="input-box">
        <span class="details">Last Name</span>
        <input type="text" id="fname" class="input" name="lastname" placeholder="Enter Last Name" required>
      </div>
      <div class="input-box">
        <span class="details">Access Level</span>
        <select id="access" name="access">
        <option value="staff">Staff</option>
              <option value="supervisor">Supervisor</option>
              <option value="Manager">Manager</option>
            </select>
      </div>
      <div class="input-box">
        <span class="details">Email</span>
        <input type="text" id="fname" class="input" name="email" placeholder="Enter Email" required>
      </div>
      <div class="input-box">
        <span class="details">Password</span>
        <input type="text" id="fname" class="input" name="password" placeholder="Enter Password" required>
      </div>
      <div class="input-box">
        <span class="details">Confirm Password</span>
        <input type="text" id="fname" class="input" name="confirmpassword" placeholder="Confirm Password" required>
      </div>
  </div>
  <div class="button">
    <input type="submit" value="Register">
  </div>
  </form>
      </form>
    </div>
  </div>
</body>
</html>