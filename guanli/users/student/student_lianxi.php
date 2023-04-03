<?php
require "../../comment/function.php";
session_start();
$name="";
if(isset($_SESSION['name']) &&$_SESSION['student']=="student")
{
    $name=$_SESSION['name'];
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='login.html'; </script>"; 
}


$data=array();
$con= db_conn($config);

//检查连接

if($con)
{
    $sql = "SELECT * from t_panduan order by rand() limit 10";
    mysqli_query($con, 'set names utf8');
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);

    
      //单选题，查询t_dan单选题表，取数据
      $sql2 = "SELECT * from t_dan order by rand() limit 10";
      mysqli_query($con, 'set names utf8');
      $result2 = mysqli_query($con,$sql2);
      $row2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);
      
      $sql3 = "SELECT * from t_duo order by rand() limit 10 ";
      mysqli_query($con, 'set names utf8');
      $result3 = mysqli_query($con,$sql3);
      $row3 = mysqli_fetch_all($result3,MYSQLI_ASSOC);

      $sql4 = "SELECT * from t_tiankong order by rand() limit 8";
      mysqli_query($con, 'set names utf8');
      $result4 = mysqli_query($con,$sql4);
      $row4 = mysqli_fetch_all($result4,MYSQLI_ASSOC);

      require './view/student_lianxi.html';

}
mysqli_close($con);