<?php
require "../../comment/function.php";
session_start();
// $name="";
if(isset($_SESSION['name']) &&$_SESSION['student']=="student")
{

  $name=$_SESSION['name'];
  // echo $name;
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}
/*

   $con=mysqli_connect("localhost","root","root","itcast_cms"); 
// 检查连接 
    if ($con) 
        { 
  
         //$sql="select * from users where name='jj'";
        $sql="select * from users ";
       //// 执行查询函数   mysqli_query($con,"SELECT * FROM users");
        $result=mysqli_query($con,$sql);
        // 关联数组
       // $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$row = mysqli_fetch_array($result);  //获取一行数据
        // 获取数据 
        //$row =mysqli_fetch_all($result,MYSQLI_ASSOC); //获取所有数据
        //echo $row['id'],$row['name'],$row['password'];
        require './view/user_admin.html';
        }
*/




$con= db_conn($config);
  // $con=mysqli_connect("localhost","root","","itcast_cms"); 

  
// 检查连接 
    if ($con) 
        { 
        // var_dump($name);
        $sql = "SELECT * from users  where name='".$name."'";
        $result = mysqli_query($con,$sql);

        //echo $_SERVER['PHP_SELF'];
       
        require './view/student_admin.html';
        
        }
        
mysqli_close($con);
