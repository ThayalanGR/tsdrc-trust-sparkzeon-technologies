<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once('./config/dbconnection.php');


     $sql = "SELECT * FROM tbl_gallery";

    //  echo $sql;
    $row = mysqli_query($DB, $sql);
    $data = array();
    while($result = mysqli_fetch_assoc($row)) {
        array_push($data, $result);
    }
    $json = array("gallery" => $data);
    echo json_encode($json);

    mysqli_close($DB);

?>
