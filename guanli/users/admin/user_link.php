<?php
require "../../comment/function.php";
session_start();
error_reporting(0);
if(isset($_SESSION['name']))
{

  $name=$_SESSION['name'];
  //echo $name;
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='login2.html'; </script>"; 
}

$name=$_POST['name'];
// $id=$_POST['id'];
$con= db_conn($config);
  // $con=mysqli_connect("localhost","root","","itcast_cms"); 

  
// 检查连接 
if ($con) 
{ 
$sql="SELECT count(*) as 'count' from itcast_cms  where name like '%".$name."%'";
$result = mysqli_query($con,$sql);
$arr = mysqli_fetch_array($result);
$count = $arr['count'];
echo "总记录数:",$count;

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
$sql = "SELECT * from itcast_cms  where name like '%$name%' or id like '%$name%'"."limit $start,$pagesize";
// $sql="select * from yx_books where ".$_POST['seltype']." like ('%".$_POST['coun']."%') order by id desc limit $startno,$pagesize";
$result = mysqli_query($con,$sql);
require './view/user_select.html';
}
