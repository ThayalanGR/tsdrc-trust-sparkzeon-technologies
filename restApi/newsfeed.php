<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once('./config/dbconnection.php');


     $sql = "SELECT * FROM `tbl_newsfeed`";

    //  echo $sql;

    if($row = mysqli_query($DB, $sql)) {
        $json = array(  "status" => $row);
        echo json_encode($json);
    }

?>
