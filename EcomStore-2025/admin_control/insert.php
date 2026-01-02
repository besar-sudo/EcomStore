<?php

include('config.php');

if (isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image'] ['tmp_name'];
    $image_name     = $_FILES['image'] ['name'];
    $image_upload   = "images/".$image_name;
    $insert         = "INSERT INTO products (name , price , image) VALUES ('$name','$price','$image_upload')";
    mysqli_query($connect, $insert);
    if (move_uploaded_file($image_location, 'images/'.$image_name)) {
        echo '<script>alert("Image has ben uploaded")</script>';
    }
    else {
        echo '<script>alert("Error uploading image")</script>';
    }
    header('location: index.php');
}


?>