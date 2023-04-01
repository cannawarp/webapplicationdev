    <a href="index.php?page=order" class="move">Order List</a> 
    <a href="index.php?page=order&action=create" class="move">New Order</a> 
    
    <?php
      switch($action){
                case 'create':
                    require_once 'order-module/create-transaction.php';
                break; 
                case 'order':
                    require_once 'order-module/order-products.php';
                break; 
                default:
                    require_once 'order-module/main.php';
                break; 
            }
    ?>