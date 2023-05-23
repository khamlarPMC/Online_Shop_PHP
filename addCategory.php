<?php include('menu.php'); ?>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Category Name: </label>
            <input type="text" name="cate_name" class="form-control">
        </div>
        <input type="submit" value="save" name="btn" class="btn btn-primary">
    </form>
</div>
<?php
if (isset($_POST['btn'])) {
    echo $cate_name = $_POST['cate_name'];
    $insert_cate = "INSERT INTO category(id, parent_id, name) VALUES ('',0,'$cate_name')";
    if ($conn->query($insert_cate)) {
        ?>
        <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                
            }),
            window.setTimeout(function(){
                window.location.href = "categories.php";
            },1000);
        </script>
        <?php
    } else {
        echo mysqli_error($conn);
    }
}
?>