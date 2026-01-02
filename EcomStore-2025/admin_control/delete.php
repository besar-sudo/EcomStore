<?php

include ('config.php');
$ID = $_GET['id'];
mysqli_query($connect, "DELETE FROM products WHERE id=$ID");
header ('location: products.php');
?>