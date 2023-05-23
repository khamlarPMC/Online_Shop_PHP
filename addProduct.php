<?php
    include("menu.php");
?>
<div class="container">
    <div class="row">
        <h2 class="col-sm-12">Add Product</h2>
        <form action="" method="post" class="col-sm-12" enctype="multipart/form-data">
            <select name="cate" class="form-control">
                <option value="0">--Choose category--</option>
                <?php    
                    $select_cate = "SELECT * FROM category ORDER BY name ASC";
                    $result_cate = mysqli_query($conn, $select_cate);
                    while($row_cate = mysqli_fetch_assoc($result_cate)){
                        ?>
                <option value="<?=$row_cate['id']?>"><?=$row_cate['name']?></option>
                        <?php
                    }
                ?>
            </select>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="">Name:</label> <!-- ########## -->
                    <input type="text" name="pro_name" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Description:</label>
                    <input type="text" name="pro_desc" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Price:</label>
                    <input type="number" name="pro_price" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Stock:</label>
                    <input type="number" name="pro_stock" class="form-control">
                </div>
                <div class="col-sm-12 form-group">
                    <label for="">Image:</label>
                    <input type="file" name="pro_file" class="form-control">
                </div>
            </div>
            <input type="submit" name="btn_add" class="btn btn-primary" value="Save">
        </form>
    </div>
</div>
<?php
    if(isset($_POST['btn_add'])){
        echo $cate_id = $_POST['cate'];
        echo $name = $_POST['pro_name'];
        echo $description = $_POST['pro_desc'];
        echo $price = $_POST['pro_price'];
        echo $stock = $_POST['pro_stock'];
        echo $picture = $_FILES['pro_file']['name'];
    }
?>
enctype="multipart/form-data"