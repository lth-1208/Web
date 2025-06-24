<?php
include "header.php";
include "slider.php";
include "class/type_class.php";
?>
<?php
$type = new type;
$show_type = $type->show_type();
?>

<style>
    .admin-content-right-cartegory-show {
    background-color: #fef0f5; 
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
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
    border-radius: 10px;
    overflow: hidden;
}
.admin-content-right-cartegory-show th,
.admin-content-right-cartegory-show td {
    padding: 14px;
    text-align: center;
    font-weight: 500;
    border: 1px solid #ffc0cb;
    font-size: 20px;
}
.admin-content-right-cartegory-show th {
    background-color: #ffb6c1; /* hồng tươi */
    color: black;
    font-weight: bold;
}
.btn-edit,
.btn-delete {
    display: inline-block;
    padding: 6px 14px;
    margin: 2px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: 0.3s;
}

</style>
<div class="col-sm-12 col-md-9 col-lg-9 admin-content-right" style=" width: 80%;">
                        <div class="admin-content-right-cartegory-show">
                                <h2>Danh sách các loại sản phẩm</h2>
                                <table>
                                    <tr>
                                        <th>Stt</th>
                                        <th>ID</th>
                                        <th>Danh mục</th>
                                        <th>Loại sản phẩm</th>
                                        <th>Sửa/Xóa</th>
                                    </tr>
                                    <?php
                                            if($show_type){
                                                $i=0;
                                                while($result = $show_type->fetch_assoc()){
                                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $result['type_id'] ?></td>
                                        <td><?php echo $result['cartegory_name'] ?></td>
                                        <td><?php echo $result['type_name'] ?></td>
                                        <td>
                                            <a href="type_edit.php?type_id=<?php echo $result['type_id'] ?>" class="btn-edit">Sửa</a>
                                            <a href="type_delete.php?type_id=<?php echo $result['type_id'] ?>" class="btn-delete">Xóa</a>
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