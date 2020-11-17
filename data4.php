<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "oop";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect My Sql:' .mysqly_error());
}
?>
