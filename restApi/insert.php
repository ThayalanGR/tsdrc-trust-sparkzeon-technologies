<?php

if(isset($_POST['uploadimage']))
{
    include('./dbconnection.php');
    $target_dir = "./upload/pdf/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $path=$_FILES["image"]["name"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    // Allow certain file formats
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    // `tbl_leave_message`(`name`, `email`, `organisation`, `contact`, `location`, `message`) VALUES ('".$name."','".$email."','".$organisation."',".$contact.",'".$location."','".$message."')";
    if(mysqli_query($DB,"INSERT INTO `tbl_newsfeed`(`path`) VALUES ('".$path."')")){
    ?>
    <h1>news feed added successfully </h2>
    <?php
    }
}

?>

<html>
    <head>
        <title>create newfeed</title>
        <style>
         body {
             display: flex;
             justify-content: center;
             align-items: center;
             background: #f3f3f3;
             flex-direction: column;
         }
        </style>
    </head>
    <body>
        <h1>NewsFeed upload portal - TFSDRC</h1>
        <form name="uploadimage" class="form-profile" method="post" action="" enctype="multipart/form-data">
        <div class="form-title-row mb-0 pb-0">
            <label for="" style="font-weight: bold;">Enter title for Newsfeed</label> <br> <br>
            <textarea type="text" name="title"  id="title-input" placeholder="please enter title" cols="50 " rows="6" ></textarea> <br> <br>
            <label for="" style="font-weight: bold;"> upload pdf :- </label> <br> <br>
            <input id="file-input" name="image" type="file"/> <br> <br>
            <input type="submit" class="btn btn-primary" style="border-radius:50px;" name="uploadimage" value="Upload"/> <br>
        </div>
        </form>        
    </body>
</html>

