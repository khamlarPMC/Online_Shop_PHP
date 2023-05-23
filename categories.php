<?php include('menu.php'); ?>
    <div class="container"><br>
        <p>
            <a href="addCategory.php" class="btn btn-info">Add Category</a>
        </p>   
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Parent ID</th>
            <th>Name</th>
        </tr>
        <?php
            $select_cate = "SELECT * FROM category ORDER BY name ASC";
            $result = mysqli_query($conn, $select_cate);
            $no = 1;
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row['parent_id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    </div>
</body>
</html>