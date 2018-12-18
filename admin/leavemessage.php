<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();

if(isset($_GET['id']))
{
  $id=$_GET['id'];
$result=mysqli_query($con,"delete from tbl_leave_message where mid='$id'");
if($result)
{
echo "<script>alert('Data deleted');</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>Admin | leave-message</title>
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
          	<h3><i class="fa fa-angle-right"></i> User Messages</h3>                  
            <div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All messages </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">Name</th>
                                  <th> Email</th>
                                  <th> Subject</th>
                                  <th> message</th>
                                  <th> Date/Time</th>
                                  <th> Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"SELECT * FROM tbl_leave_message");
                                $cnt=1;
                                while($row=mysqli_fetch_array($ret))
                                {
                                  ?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                              <td style="font-size:12px;"><?php echo $row['name'];?></td>
                              <td style="font-size:12px;"><?php echo $row['email'];?></td>
                              <td><textarea readonly style="font-size:10px;"><?php echo $row['subject'];?></textarea></td>
                              <td><textarea id="content" readonly style="font-size:12px;"><?php echo $row['message'];?></textarea></td>
                              <td style="font-size:12px;"><?php echo $row['date'];?></td>
                              <td>                              
                                  <a href="leavemessage.php?id=<?php echo $row['mid'];?>"> 
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