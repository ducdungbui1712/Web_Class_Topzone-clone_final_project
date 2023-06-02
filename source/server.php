<?php
require_once('db/db.php');

if(isset($_GET['keyword'])){
    $keyword = '%'.$_GET['keyword'].'%';
    $result = array();
    $conn = get_connection();
    $sql = "select * from product where product.name like ?";
    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $keyword);
    if(!$stm->execute()) return false;

    $result = $stm->get_result();
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }

    $response = array();
    $response['code'] = 0;
    $response['message'] = 'Tìm thấy ' . count($data) . ' kết quả'; 
    $response['data']= $data;
    print_r(json_encode($response));
}

?>

