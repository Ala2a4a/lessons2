<?php
$hostname="locallost";
$username="root";
$password="";
$db="exmp";

conn=mysqli_connect($hostname,$username,$password,$db);

if($conn){
    //echo "yes";
}else
{
    die("no".mysqli_connect_error);
}






?>