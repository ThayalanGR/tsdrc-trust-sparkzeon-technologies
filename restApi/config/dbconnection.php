<?php
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'sql213.epizy.com');
define('DB_SERVER_USERNAME', 'epiz_23197397');
define('DB_SERVER_PASSWORD', 'MC19tuzuu9v8zx');
define('DB_DATABASE', 'epiz_23197397_tfsdrc');
// must end with a slash
define('SITE_URL', 'http://tfsdrc.com/');


$DB = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
   // echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else{
   //  echo "true";
 }
?>