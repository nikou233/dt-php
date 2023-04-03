<?php
require "../../comment/function.php";
session_start();

if(isset($_SESSION['name'])&&$_SESSION['teacher']=='teacher')
{

  $name=$_SESSION['name'];
  
  //echo $name;
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}

$con= db_conn($config);
  // $con=mysqli_connect("localhost","root","","itcast_cms"); 

  
// 检查连接 
    if ($con) 
        { 
  
         //$sql="select * from users where name='jj'";
        //$sql="select * from users ";
        $sql="SELECT count(*) as 'count' from users  where limits=1 or limits=3";
        

        $result = mysqli_query($con,$sql);
        $arr = mysqli_fetch_array($result);
        $count = $arr['count'];
        //echo "总记录数:",$count;
        
        //获取页码
        $currentpage = 1;
        if(isset($_GET['page']))
          { 
            $currentpage = $_GET['page'];
          }
           

        //$pagesize每页显示记录数
        $pagesize = 3;
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
        $sql = "SELECT * from users where limits=1 or limits=3  limit $start,$pagesize";
        $result = mysqli_query($con,$sql);

        //echo $_SERVER['PHP_SELF'];
       
        require './view/teacher_select.html';
        
        }


 




mysqli_close($con);