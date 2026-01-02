<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      <?php
        include('config.php');
        $ID = $_GET['id'];
        $up = mysqli_query($connect, "select * from products where id=$ID");
        $data = mysqli_fetch_array($up);
      ?>
    
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Edit Products</h2>
                <input type="text" name="id" value='<?php echo $data['id']?>'>
                <br>
                <input type="text" name="name" value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name="price" value='<?php echo $data['price']?>'>
                <br>
                <input type="file" name="image" id="file" style='display:none;'>
                <label for="file">Update product image</label>
                <button type='submit' name='update'>Edit product image</button>
                <br><br>
                <a href="products.php">Show all products</a>
            </form>
        </div>
  
</body>
</html>