<?php
include('menu.php');
?>
<div class="container"> <!-- ໜ້າ Index -->
    <div class="row">
        <div class="search_p col-sm-12">
            <form action="" method="post">
            Search :
            <input type="text" name="txt_search" class="form-control col-sm-5">
            <input type="submit" value="Go" name="btn_search" class="btn btn-info">
            </form>
        </div>
        <?php
        if(isset($_POST['btn_search'])){
            $txt_search = $_POST['txt_search'];
            $select_p = "SELECT p.*, c.name AS c_name FROM product AS p JOIN category AS C ON (p.category_id = c.id) 
            WHERE p.name LIKE '%$txt_search%' OR p.description LIKE '%$txt_search%'";
        }
        else{
            $select_p = "SELECT p.*, c.name AS c_name FROM product AS p JOIN category AS C ON (p.category_id = c.id)";
        }
        
        $result_p = mysqli_query($conn, $select_p);
        while ($row_p = mysqli_fetch_assoc($result_p)) { ?>
            <div class="col-sm-3">
                <div class="index_box"> <!------------------>
                    <div class="index_img">
                        <img src="img/<?= $row_p['picture'] ?>" alt="">
                    </div>
                    <div class="index_name">
                        <?= $row_p['name'] ?>
                    </div>
                    <div class="index_desc">
                        <?= $row_p['description'] ?>
                    </div>
                    <div class="index_price">
                        <?= $row_p['price'] ?>
                    </div>
                    <div class="index_btn">
                        <a href="product_detail.php?p_id=<?= $row_p['id'] ?>" class="btn btn-info">Description</a>
                    </div>
                </div><!------------------>
            </div>
        <?php }
        ?>
    </div>
</div>