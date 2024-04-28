<?php
$conn=mysqli_connect("localhost","root","","isp");
if($conn)
{
    echo "Connected";
}
else
echo "failed to connect";

$username=$_POST['username'];
$password=$_POST['password'];


$data="SELECT * from adminlog where username='$username' and password='$password'";

$check=mysqli_query($conn,$data);

if($check)
{
    $num=mysqli_num_rows($check);
    if($num>0)
    {
        echo "login successful";
        session_start();
        $_SESSION['username']=$username;
        header('location:admindesh1.php');
    }
    else
    echo "failed";
}
else
echo "data not send";
?>