<?php
include ('config.php');

$ID = $_GET['id'];
mysqli_query($connect, "DELETE FROM cart WHERE id=$ID");
header('location: card.php');
?> 