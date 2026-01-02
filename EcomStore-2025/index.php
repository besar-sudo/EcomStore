<!DOCTYPE html>
<html>
  
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop 2026</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
      <div class="main">
          <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>Marketing Website</h2>
            <img src="shop_image.jpg" alt="shop logo" width='450px'>
            <br>
            <input placeholder='name' type="text" name="name">
            <br>
            <input placeholder='price$' type="text" name="price">
            <br>
            <input type="file" name="image" id="file" style='display:none;'>
            <label for="file">Choose the product image</label>
            <button type='submit' name='upload'>Upload product</button>
            <br><br>
            <a href="products.php">ٍShow all products</a>
          </form>
        </div>

  <footer>all © [2026] All rights reserved by Bashar</footer>
    
</body>
</html>