<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart, my product</title>
    <style>
        h3{
            text-align: center;
            font-weight: bold;
            font-family: 'cairo', 'sans-serif';
        }
        main{
            width: auto;
            margin-top: 30px;
        }
        table{
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            background-color: #277DF5;
            color: red;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
        a{
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
        }
    </style>
</head>
<body>
    <h3>Your reserved products</h3>
    <?php
        include('config.php');
        $results = mysqli_query($connect, "SELECT * FROM cart");
        while($row =mysqli_fetch_array($results)){
            echo "
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product name</th>
                        <th scope='col'>Product price</th>
                        <th scope='col'>Delete product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='delete_card.php? id=$row[id]' class='btn btn-danger'>Remove</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
            ";}?>

<a href="shops.php">Back to Products Page</a>
             
    
</body>
</html>