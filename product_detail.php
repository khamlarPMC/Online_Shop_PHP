<?php
include('menu.php');

$p_id = $_GET['p_id'];
$select_p = "SELECT * FROM product WHERE id=$p_id";
$result = mysqli_query($conn, $select_p);
while ($row_p = mysqli_fetch_assoc($result)) {
?>

<div class="container mt-2">
    <div class="row">
        <div class="col-sm-4 p_img">
            <img src="img/<?= $row_p['picture'] ?>" alt="">
        </div>
        <div class="col-sm-8">
            <div class="p_name"><?= $row_p['name'] ?></div>
            <div class="p_desc"><?= $row_p['description'] ?></div>
            <div class="p_price"><?= $row_p['price'] ?></div>
            <div class="p_form">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="number" name="p_amount" class="col-sm-3 form-control" min="1" value="1">
                        <div class="btn">
                            <input type="submit" value="Buy" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
}
?>
