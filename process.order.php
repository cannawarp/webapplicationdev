<?php
include '../classes/class.order.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action){
    case 'create':
        create_new_transaction();
	break;
    case 'additem':
        new_order_item();
	break;
    case 'saveitem':
        save_receive_items();
	break;
}

function create_new_transaction(){
	$order = new Order();
   $name= ucwords($_POST['sname']);
    $desc= ucwords($_POST['desc']); 
    $amount= $_POST['amount']; 
    $rid = $order->new_order($name, $desc, $amount);
    if(is_numeric($rid)){
        header('location: ../index.php?page=order&action=order&id='.$rid);
    }
}

function new_order_item(){
	$order = new Order();
    $orderid= $_POST['orderid'];
    $prodid= $_POST['prodid']; 
    $qty= $_POST['qty']; 
    $rid = $order->new_order_item($orderid, $prodid, $qty);
    if($rid){
        header('location: ../index.php?page=order&action=order&id='.$orderid);
    }
}

function save_receive_items(){
	$order = new Order();
    $orderid= $_POST['orderid'];
    $order->save_to_order($relid);
    $rid = $order->save_order_items($orderid);
    if($rid){
        header('location: ../index.php?page=order&action=order&id='.$orderid);
    }
}