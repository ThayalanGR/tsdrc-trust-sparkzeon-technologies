<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['Submit']))
{
$oldpassword=md5($_POST['oldpass']);
$sql=mysqli_query($con,"SELECT password FROM admin where password='$oldpassword'");
$num=mysqli_fetch_array($sql);
if($num>0) {
        
    $adminid=$_SESSION['adminid'];
    // echo '<script> alert("'.$adminid.'"); </script>';

    $newpass=md5($_POST['newpass']);
    $ret=mysqli_query($con,"update admin set password='$newpass' where user_id='$adminid'");
    $_SESSION['msg']="Password Changed Successfully !!";
    echo '<script> alert("Password Changed Successfully !!"); </script>';
    // header('location:change-password.php');
}
else
{
$_SESSION['msg']="Old Password not match !!";
echo '<script> alert("Old Password not match !!"); </script>';
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

    <title>Admin | Change Password</title>
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
          	<h3><i class="fa fa-angle-right"></i> Change Password </h3>
				<div class="row">
				
                  
                <!-- onSubmit="return valid();" -->
                  <div class="col-md-12">
                      <div class="content-panel">
                           <form class="form-horizontal style-form" name="form1" method="post" action="" >
                           <!--p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p-->
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Old Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="oldpass" value="" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">New Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="newpass" value="" >
                                  
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Confirm Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="confirmpassword" value="" >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Change" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
      </section></section>
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
