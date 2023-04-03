<?php
require "../../comment/function.php";
session_start();
$con=db_conn($config);
if(isset($_SESSION['name']))
{
    $name=$_SESSION['name'];
    // echo $name;
}
else{
    echo"<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}

  // $con=mysqli_connect("localhost","root","","itcast_cms"); 

  
// 检查连接 
    if ($con) 
        { 
  
         //$sql="select * from users where name='jj'";
        //$sql="select * from users ";
        $sql="SELECT count(*) as 'count' from  t_dan";
        

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
        $sql = "SELECT * from  t_dan limit $start,$pagesize";
        $result = mysqli_query($con,$sql);

        //echo $_SERVER['PHP_SELF'];
       
        require './view/xuanze_admin.html';
        
        }
 




mysqli_close($con);