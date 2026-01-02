<?php

include('config.php');

if (isset($_POST['update'])){
    $ID = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image'] ['tmp_name'];
    $image_name = $_FILES['image'] ['name'];
    $image_upload = "images/".$image_name;
    $update = "UPDATE products SET name='$name' , price='$price' , image='$image_upload' WHERE id=$ID";
    mysqli_query($connect, $update);
    if (move_uploaded_file($image_location, 'images/'.$image_name)) {
        echo '<script>alert("The product has been updated successfully")</script>';
    }
    else {
        echo '<script>alert("An error occurred while updating the product")</script>';
    }
    header('location: index.php');
}


?>