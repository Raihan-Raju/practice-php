<?php
$HostName = "localhost";
$UserName = "root";
$Password = "";

$DatabaseName ="my_class";

$Connection = mysqli_connect($HostName,$UserName,$Password);

if(!$Connection){
    die("connect error!!");
}
 echo "MySQL and php connection has been successfuly by procidural";
?>