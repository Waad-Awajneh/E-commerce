<?php
require_once 'connection.php';
$cart_id = $_GET['del'];
$cart_id = $_GET['del2'];

$query = $connect->prepare("DELETE  FROM `cart` Where cart_id=? ");
$query->execute([$cart_id]);
if(isset($_GET['del'])) {
    echo "<script>window.location.href='cart.php'</script>";
}if(isset($_GET['history'])){
    
$query = $connect->prepare("DELETE  FROM `cart` Where cart_id=? ");
$query->execute([$cart_id]);
    echo "<script>window.location.href='order_history.php'</script>";

} 
else {
    echo "<script>window.location.href='index.php'</script>";
}
