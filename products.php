<?php
        require("connect.php");

        $sql="select * from products";
        $result = mysqli_query($con, $sql);

        $sql_total="SELECT SUM(price) FROM `products` WHERE 1 ";
        $result_total=mysqli_query($con, $sql_total);
        $row_total = mysqli_fetch_row($result_total); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Oswald', sans-serif;
        }
        body{
            background-color: rgba(64, 224, 208,0.2);
        }
        h1{
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Products</h1><hr>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <td width="15%">Code</td>
                <td width="60%" align="center">Name</td>
                <td width="25%" align="center">Price</td>
            </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php print($row["part_code"]);?></td>
                    <td align="center" ><?php print($row["part_name"]);?></td>
                    <td align="center"><?php print($row["price"]);?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
            <tfoot>
            <tr>
                <td>Total</td>
                <td></td>
                <td align="center"><?php print($row_total[0]);?></td>
            </tr>
            </tfoot>
        </table>
    </div>
</body>



