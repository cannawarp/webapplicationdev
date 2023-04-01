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
    <form method="POST" action="processes/process.product.php?action=newproduct">
        <form action="#">
        <div class="user-details">

        <div class="input-box">
            <span class="details">Product Name</span>
            <input type="text" id="pname" class="input" name="pname" placeholder="Product name">
            </div>

            <div class="input-box">
            <span class="details">Description</span>
            <input id="desc" class="input" name="desc" placeholder="Description"></input>
            </div>

            <div class="input-box">
            <span class="details">Product Retail Price</span>
            <input type="text" id="price" class="input" name="price" placeholder="Product price">
            </div>

            <div class="input-box">
            <span class="ptype">Type</span>
            <select id="ptype" name="ptype">
            </div>
              <?php
              if($product->list_types() != false){
                foreach($product->list_types() as $value){
                   extract($value);
              ?>
              <option value="<?php echo $type_id;?>"><?php echo $type_name;?></option>
              <?php
                }
              }
              ?>
        </select>
              </div>
        <div class="button">
        <input type="submit" value="Save">
        </div>
        </div>
  </form>
  </form>
</div>
</div>
</body>
</html>