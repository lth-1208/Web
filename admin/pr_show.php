<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
$show_pr = $cartegory->show_pr();
?>
<style>
    .admin-content-right-cartegory-show {
    background-color: #fef0f5; 
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}
.admin-content-right-cartegory-show h2 {
    color: black;
    margin-bottom: 20px;
}
.admin-content-right-cartegory-show table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
}
.admin-content-right-cartegory-show th,
.admin-content-right-cartegory-show td {
    padding: 12px 15px;
    text-align: center;
    font-weight: 500;
    border: 1px solid #ffc0cb;
}
.admin-content-right-cartegory-show th {
    background-color: #ffb6c1; 
    color: black;
    font-weight: bold;
}
.btn-edit,
.btn-delete {
    display: inline-block;
    padding: 6px 12px;
    margin: 0 4px;
    border-radius: 4px;
    text-decoration: none;
    color: white;
    font-weight: 500;
}
</style>


<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
                        <div class="admin-content-right-cartegory-show">
                                <h2>Danh sách danh mục</h2>
                                <table>
                                    <tr>
                                        <th>STT</th>
                                        <th>ID</th>
                                        <th>Danh mục</th>
                                        <th>Sửa/Xóa</th>
                                    </tr>
                                    <?php
                                            if($show_pr){
                                                $i=0;
                                                while($result = $show_pr->fetch_assoc()){
                                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $result['cartegory_id'] ?></td>
                                        <td><?php echo $result['cartegory_name'] ?></td>
                                        <td>
                                            <a href="pr_edit.php?cartegory_id=<?php echo $result['cartegory_id'] ?>" class="btn-edit">Sửa</a>
                                            <a href="pr_delete.php?cartegory_id=<?php echo $result['cartegory_id'] ?>" class="btn-delete">Xóa</a>
                                        </td>
                                    </tr>
                                    <?php
                                         }
                                  }
                                    ?>
                                </table>
                        </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>