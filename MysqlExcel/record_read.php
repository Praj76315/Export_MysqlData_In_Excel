<?php  
require 'db_Connect.php';
$sql = "SELECT * FROM items";
$result = mysqli_query($conn,$sql);
$developer_records = array();
while($rows = mysqli_fetch_assoc($result)){
    $developer_records[]=$rows;
}
?>