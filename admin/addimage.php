<?php
session_start();
include('dbconnection.php');
include("checklogin.php");
check_login();
if(isset($_POST["category"]))
{


  $target_dir = "./gallery/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $path=$_FILES["image"]["name"];
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" && $imageFileType != "bmp" ) {
    echo "Sorry, only JPG, JPEG, PNG, GIF & BMP files are allowed.";
  }else{
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
  }
$result=mysqli_query($con,"insert into tbl_gallery (path) values ('$path')");
if($result)
{
echo "<script>alert('Image added :-)');</script>";
}
}

if(isset($_POST['delete']))
{
$id=$_POST['id'];
$result=mysqli_query($con,"delete from tbl_gallery where img_id='$id'");
if($result)
{
echo "<script>alert('category deleted :-)');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>Admin | Manage Users</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
  <?php include('./header.php'); ?>

        <?php include('./sidebar.php'); ?>
      <section id="main-content">
          <section class="wrapper">
     <h3><i class="fa fa-angle-right"></i>Add Image </h3>      
    <form method="post" action="" name="category" id="category" enctype="multipart/form-data">
        <label for="cat"><h4>picture:-<h4></label>
        <input id="cat" name="image" required="" type="file"><br>
        <input type="submit" name="category" id="category" class="btn-primary" value="Add Image"> 
    </form>
    <h4><i class="fa fa-angle-right"></i>ALL Images</h4>               
            <div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th>Picture</th>
                                  <th>Date</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"SELECT * FROM tbl_gallery");
                                $cnt=1;
                                while($row=mysqli_fetch_array($ret))
                                {
                                  ?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                              <td><img alt="User Pic" src="./gallery/<?php echo $row['path']; ?>" style="width:150px; height:150px;" class="img-rounded img-responsive"></td>
                              <td><?php echo $row['date'];?></td>
                              <td>
                              <a>           
                                  <form action="" method="post" name="delete">                    
                                  <input type="hidden" name="id" value="<?php echo $row['img_id'];?>">
                                  <button type="submit" name="delete" class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                </form>
                              </td>
                          </tr>
                              <?php $cnt=$cnt+1; }?>
                            
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
    </section>
    </section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
