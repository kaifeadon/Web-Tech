<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="testdb1";
$conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
    echo "cant connect";
}

$sql="INSERT INTO person(fname,lname,age) VALUES ('alice','joe',23)";

if($conn->query($sql))
{
    echo "record inserted";
}
else
{
    echo "can't insert".$conn->error;
}


?>