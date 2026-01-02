<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($connect, "select * from products where id=$ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Product Purchase</title>
    <style>
        h2{
            text-align: center;
        }
        input{
            display: none;
            width: auto;
        }
        .main{
            width: auto;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
            margin-top: 50px;
            display: flex;
            justify-content: center; 
            align-items: center;
        }
        button .btn{
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
        }
    </style>
</head>
<body>
        <div class='main'>
            <form action="insert_card.php" method='post'>
                <h2>Are you sure you want to purchase this product?</h2>
                <input type="text" name="id" value='<?php echo $data['id']?>'>
                <input type="text" name="name" value='<?php echo $data['name']?>'>
                <input type="text" name="price" value='<?php echo $data['price']?>'>
                <button name='add' type="submit" class='btn btn-warning'>Confirm Add to Cart</button>
                <br>
                <a href="shops.php">Back to Products Page</a>
            </form>
        </div>
</body>
</html>