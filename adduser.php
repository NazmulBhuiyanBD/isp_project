<?php
$conn=mysqli_connect("localhost","root","","isp");
if($conn)
{
    echo "Connected";
}
else
echo "failed to connect";

$username=$_POST['Name'];
$password=$_POST['password'];
$ip=$_POST['ip'];
$package=$_POST['package'];
$phone=$_POST['phone'];
$address=$_POST['address'];



$data="INSERT INTO user Values('','$username','$password','$ip','$package','$phone','$address')";

$check=mysqli_query($conn,$data);
if($check)
{   
    echo "data sended";
    header("location:admindesh.html");
}
else
echo "data not send";
?>