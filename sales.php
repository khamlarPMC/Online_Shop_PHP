<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('config.php');
        $select = "SELECT s.*, p.name AS p_name, p.price AS p_price, u.name AS u_name FROM sales AS s JOIN product AS p ON (s.product_id=p.id) JOIN users AS u ON (s.user_id = u.id)";
        $result = mysqli_query($conn, $select);
        while($row = mysqli_fetch_assoc($result)){
            echo $row['p_name'];
            echo "<br>";
        }
    ?>
</body>
</html>