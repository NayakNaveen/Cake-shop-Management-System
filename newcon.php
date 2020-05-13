<?php
$servername="localhost";
$dbuser="root";
$dbpass="";
$database="register";

$conn=mysqli_connect($servername,$dbuser,$dbpass,$database);
if(!$conn)
{
    die("ERROR: could not connect.". mysqli_connect_error());
}
echo "connect successfully. host info:". mysqli_get_host_info($conn);

?>