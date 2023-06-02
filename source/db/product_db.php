<?php 
    require_once('db.php');

    function get_products() {
        $sql = "select * from product";
        $conn = get_connection();

        $result = $conn->query($sql);
        if(!$result->num_rows > 0) {
            return null;
        }

        $products = array();

        for($i = 0; $i < $result->num_rows; $i++) {
            $p = $result->fetch_assoc();
            $products[$i] = $p;
        } 
        return $products;
    }

    function get_product_by_id($id) {
        $sql = "select * from product where id = ?";
        $conn = get_connection();
        $stm = $conn->prepare($sql);
        $stm->bind_param('i', $id);
        if(!$stm->execute()) return false;
        $result = $stm->get_result();
        if(!$result->num_rows > 0) {
            return null;
        }
        $p = $result->fetch_assoc();
       
        return $p;
    }

    function get_product_by_category($category) {
        $sql = "select * from product where category = ?";
        $conn = get_connection();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $category);
        if(!$stm->execute()) return false;
        $result = $stm->get_result();
        if(!$result->num_rows > 0) {
            return null;
        }

        for($i = 0; $i < $result->num_rows; $i++) {
            $p = $result->fetch_assoc();
            $products[$i] = $p;
        } 

        return $products;
    }

    function get_product_by_subCategory($subCategory) {
        $sql = "select * from product where subCategory = ?";
        $conn = get_connection();
        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $subCategory);
        if(!$stm->execute()) return false;
        $result = $stm->get_result();
        if(!$result->num_rows > 0) {
            return null;
        }

        for($i = 0; $i < $result->num_rows; $i++) {
            $p = $result->fetch_assoc();
            $products[$i] = $p;
        } 

        return $products;
    }

    function get_product_by_GB($id, $gb) {
        $sql = "select id from product where id = ? and capacity = ?";
        $conn = get_connection();
        $stm = $conn->prepare($sql);
        $stm->bind_param('is', $id, $gb);
        if(!$stm->execute()) return false;
        $result = $stm->get_result();
        if(!$result->num_rows > 0) {
            return null;
        }
        $p = $result->fetch_assoc();
       
        return $p;
    }
?>