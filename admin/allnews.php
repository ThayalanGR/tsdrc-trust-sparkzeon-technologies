<?php
session_start();
include('dbconnection.php');
include("checklogin.php");
check_login();
if(isset($_GET['id']))
{
$id=$_GET['id'];
$msg=mysqli_query($con,"delete from tbl_newsfeed where id='$id'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
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

    <title>Admin | Newsfeed</title>
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
          	<h3><i class="fa fa-angle-right"></i> NEWSFEED</h3>
				<div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> ALL NEWS FEED </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">TITLE</th>
                                  <th> FILE </th>
                                  <th class="hidden-phone">DATE</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from tbl_newsfeed");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                                <td><?php echo $cnt;?></td>
                                <td><?php echo $row['title'];?></td>
                                <td><a target="_blank" href="<?php  $prepare = './newsfeed/pdf/';
                                                    echo $prepare . $row['path'];
                                                ?>"><?php echo $row['path'];?></a>
                                </td>
                                <td><?php echo $row['createdAt'];?></td>
                                <td>                              
                                    <a href="allnews.php?id=<?php echo $row['id'];?>"> 
                                    <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
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
