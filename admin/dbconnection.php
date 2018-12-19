<?php
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'sql310.epizy.com');
define('DB_SERVER_USERNAME', 'epiz_23170058');
define('DB_SERVER_PASSWORD', 'UQlAbcnVBg');
define('DB_DATABASE', 'epiz_23170058_tfsdrc');
// must end with a slash
define('SITE_URL', 'http://tfsdrc.epizy.com/');



$con = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

