<?php
$conn= new mysqli('localhost','root','','crud');
if($conn->connect_error)
{
    die("COnnection failed".$conn->connect_error);
}
else{
    echo "Bangladesh";
$create="CREATE TABLE users(
id int(10),
name varchar(10),
email varchar(20),
password int(10)
)";

$qry=$conn->query($create);
echo "Bangladesh";
}
?>