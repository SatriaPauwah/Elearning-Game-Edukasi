<?php
$db_server ='127.0.0.1';
$db_user ='root';
$db_pass ='';
$db_name ='learning';



$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}
mysqli_close($conn);
?>