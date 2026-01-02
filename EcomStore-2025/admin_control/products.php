<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>

    <style>
        h3{
            font-family: "Cairo", sans-serif;
            font-weight: bold;
            text-align: center;
        }
        .card{
            padding: 20px;
            float: right;
            margin-top: 20px;
            margin-left: 30px;
            margin-right: 30px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: auto;
        }
        .btn{
            margin-top: 5px;
            margin-right: 30px;
        }
    </style>
</head>

<body>

    <h3>All available products</h3>

    <?php
        include('config.php');
        $results = mysqli_query($connect, "SELECT * FROM products");
        while ($row = mysqli_fetch_array($results)){
            echo "
        <main>
            <div class='card' style='width: 18rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a>
                    <a href='update.php? id=$row[id]' class='btn btn-primary'>Edit</a>
                </div>
            </div>
        </main>
        ";
        }
    ?>

</body>
</html>