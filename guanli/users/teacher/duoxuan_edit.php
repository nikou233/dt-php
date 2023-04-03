<?php
require "../../comment/function.php";

session_start();
$con = db_conn($config);
if(isset($_SESSION['name']))
{
    // $name=$_SERVER['name'];
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}

echo $_GET['id'];
$id=$_GET['id'];
if ($con)
{
    $sql="select * from t_duo where id=".$id;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    require "./view/duoxuan_edit.html";
}
mysqli_close($con);