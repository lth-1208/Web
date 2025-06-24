<?php
include_once __DIR__ . '/../database.php';

?>

<?php
class product{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $type_id = $_POST['type_id'];
        $product_price = $_POST['product_price'];
        $product_sale = $_POST['product_sale'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        move_uploaded_file( $_FILES['product_img']['tmp_name'], "uploads/".$_FILES['product_img']['name']);

        $query = "INSERT INTO tbl_product (
            product_name,
            cartegory_id,
            type_id,
            product_price,
            product_sale,
            product_desc,
            product_img) VALUES (
            '$product_name', 
            '$cartegory_id', 
            '$type_id', 
            '$product_price', 
            '$product_sale', 
            '$product_desc', 
            '$product_img')";
        $result = $this->db->insert($query);
        header('Location:product_show.php');
        return $result;
    }

    public function show_product(){
    $query = "SELECT p.*, c.cartegory_name, t.type_name 
              FROM tbl_product p
              INNER JOIN tbl_cartegory c ON p.cartegory_id = c.cartegory_id
              INNER JOIN tbl_type t ON p.type_id = t.type_id
              ORDER BY p.product_id DESC";
    return $this->db->select($query);
}

public function get_product($product_id){
    $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
    return $this->db->select($query);
}

public function update_product($data, $files, $product_id){
    $product_name = $data['product_name'];
    $cartegory_id = $data['cartegory_id'];
    $type_id = $data['type_id'];
    $product_price = $data['product_price'];
    $product_sale = $data['product_sale'];
    $product_desc = $data['product_desc'];

    if (!empty($files['product_img']['name'])) {
        $product_img = $files['product_img']['name'];
        move_uploaded_file($files['product_img']['tmp_name'], "uploads/" . $product_img);
        $query = "UPDATE tbl_product SET
                  product_name = '$product_name',
                  cartegory_id = '$cartegory_id',
                  type_id = '$type_id',
                  product_price = '$product_price',
                  product_sale = '$product_sale',
                  product_desc = '$product_desc',
                  product_img = '$product_img'
                  WHERE product_id = '$product_id'";
    } else {
        $query = "UPDATE tbl_product SET
                  product_name = '$product_name',
                  cartegory_id = '$cartegory_id',
                  type_id = '$type_id',
                  product_price = '$product_price',
                  product_sale = '$product_sale',
                  product_desc = '$product_desc'
                  WHERE product_id = '$product_id'";
    }

    return $this->db->update($query);
    header('Location:product_show.php');
}

public function delete_product($product_id){
    $query = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
    return $this->db->delete($query);
}

public function show_all_product() {
    $query = "SELECT p.*, c.cartegory_name, t.type_name 
              FROM tbl_product AS p
              JOIN tbl_cartegory AS c ON p.cartegory_id = c.cartegory_id
              JOIN tbl_type AS t ON p.type_id = t.type_id
              ORDER BY p.product_id DESC";
    return $this->db->select($query);
}

public function show_top_sale_products() {
        $query = "SELECT p.*, c.cartegory_name, t.type_name 
                  FROM tbl_product p
                  INNER JOIN tbl_cartegory c ON p.cartegory_id = c.cartegory_id
                  INNER JOIN tbl_type t ON p.type_id = t.type_id
                  ORDER BY (CAST(p.product_price AS DECIMAL) - CAST(p.product_sale AS DECIMAL)) DESC
                  LIMIT 3";
        return $this->db->select($query);
}

public function show_type_by_category($cartegory_id) {
    $query = "SELECT * FROM tbl_type WHERE cartegory_id = '$cartegory_id' ORDER BY type_id ASC";
    return $this->db->select($query);
}
    public function show_pr(){
        $query = "SELECT *FROM tbl_cartegory ORDER BY cartegory_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_type(){
    $query = "SELECT t.type_id, t.type_name, c.cartegory_name 
              FROM tbl_type t 
              INNER JOIN tbl_cartegory c ON t.cartegory_id = c.cartegory_id 
              ORDER BY t.type_id ASC";
    $result = $this->db->select($query);
    return $result;
    }
}
?>