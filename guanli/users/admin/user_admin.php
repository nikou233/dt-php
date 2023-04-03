<?php
require "../../comment/function.php";
session_start();
// $con=db_conn($config);
if(isset($_SESSION['name']))
{
    $name=$_SESSION['name'];
    
}
else{
    echo"<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}
// $con=mysqli_connect("localhost","root","root","itcast_cms");
$con=db_conn($config);
if($con)
{
    $sql="select * from users";
    // $result=mysqli_query($con,$sql);
    $sql="SELECT count(*) as 'count' from users ";
    



    $result = mysqli_query($con,$sql);
        $arr = mysqli_fetch_array($result);
        $count = $arr['count'];
        // echo "总记录数:",$count;
        
        //获取页码
        $currentpage = 1;
        if(isset($_GET['page']))
          { 
            $currentpage = $_GET['page'];
          }
           

        //$pagesize每页显示记录数
        $pagesize = 5;
        $pages = ceil($count/$pagesize);//$pages是总页数
        //$currentpage=3;
        //上一页的判断
        $prepage = $currentpage -1;
        if($prepage<=0)
        {$prepage=1;}
         //下一页的判断
        $nextpage = $currentpage+1;
        if($nextpage >= $pages)
        {
	         $nextpage = $pages;
        }
        
        //$currentpage是当前页码
        
        $start =($currentpage-1) * $pagesize;//起始位置
        $sql = "SELECT * from users limit $start,$pagesize";
        $result = mysqli_query($con,$sql);
       //// 执行查询函数   mysqli_query($con,"SELECT * FROM users");
       // $result=mysqli_query($con,$sql);
        // 关联数组
       // $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$row = mysqli_fetch_array($result);  //获取一行数据
        // 获取数据 
        //$row =mysqli_fetch_all($result,MYSQLI_ASSOC); //获取所有数据
        //echo $row['id'],$row['name'],$row['password'];
           require './view/user_admin.html';
}
mysqli_close($con);