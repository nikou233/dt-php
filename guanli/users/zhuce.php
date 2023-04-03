<?php
require "../comment/function.php";
$name=$_POST['name'];
$personcode=$_POST['personcode'];
$password=$_POST['password'];
$limits=$_POST['limits'];
$password2=$_POST['password2'];
// $sr='';
// $sr=['limits'];
// $limits='2';
if($password!=$password2)
{
    echo "<script> alert('密码不一致');parent.location.href='zhuce.html'; </script>";
}
// echo $name,$password,$limits;

// $con=mysqli_connect("localhost","root","roots","itcast_cms");

// 检查连接 
// if ($con) 
// { 
//   //var_dump($con);  
//   //echo '连接成功!';
// } 
// else
// {
//     die("连接错误: " . mysqli_connect_error()); 
// }

$con=db_conn($config);
$sql="INSERT INTO `users`(`name`,`password`,`limits`,`personcode`) VALUES('" .$name. "','" .$password. "','" .$limits. "','" .$personcode. "')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script> alert('注册成功!');parent.location.href='login.html'; </script>";
}
else
{
 echo '注册不成功';
}