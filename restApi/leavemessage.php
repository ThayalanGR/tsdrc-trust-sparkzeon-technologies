<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once('./config/dbconnection.php');

if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    // $location = $_GET['location'];
    // $contact = $_GET['contact'];
    $message = $_GET['message'];
    
    // echo $name,$email,$organisation,$location,$contact,$message;

     $sql = "INSERT INTO `tbl_leave_message`(`name`, `email`, `subject`,`message`) VALUES ('".$name."','".$email."','".$subject."','".$message."')";

    //  echo $sql;

    if(mysqli_query($DB, $sql)) {
        $data = array(
            "status" => true
        );
        $json = array(  "status" => true);
        echo json_encode($json);
    }

}

?>
