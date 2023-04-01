<div class="order_list">
  <h3>Order List</h3>
</div>
    <table id="data-list">
      <tr>
        <th>Order No.</th>
        <th>Order Date / ID</th>
        <th>Customer / Description</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($order->list_order() != false){
foreach($order->list_order() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=order&action=order&id=<?php echo $order_id;?>"><?php echo $order_date_added.' - '.$order_id;?></a></td>
        <td><?php echo $order_customer.' - '.$order_description;?></td>
        <td><?php echo $order_amount;?></td>
        <td><?php if($order_saved == 0){
            echo "Open Transaction";
          }else{
            echo "Saved Transaction";
          }
          ?>
          </td>
      </tr>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>