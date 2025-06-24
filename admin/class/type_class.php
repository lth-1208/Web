<?php
include "database.php";
?>

<?php
class type{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function insert_type($cartegory_id, $type_name){
        $query = "INSERT INTO tbl_type (cartegory_id, type_name) VALUES ('$cartegory_id', '$type_name')";
        $result = $this->db->insert($query);
        header('Location:type_show.php');
        return $result;
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
    public function get_type($type_id){
        $query = "SELECT *FROM tbl_type WHERE type_id= '$type_id' ";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_type($cartegory_id, $type_name, $type_id){
        $query = "UPDATE tbl_type SET type_name = '$type_name',  cartegory_id= '$cartegory_id' WHERE  type_id= '$type_id' ";
        $result = $this->db->update($query);
        header('Location:type_show.php');
        return $result;
    }
    public function delete_type($type_id){
        $query = "DELETE FROM tbl_type WHERE type_id= '$type_id' ";
        $result = $this->db->delete($query);
        header('Location:type_show.php');
        return $result;
    }
}
?>