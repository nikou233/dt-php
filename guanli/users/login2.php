<?php
session_start();

// $passno= $_POST['name'];
$password=$_POST['password'];
$captcha=$_POST['captcha'];
$limit=$_POST['limits'];
$name=$_POST['name'];
$con=mysqli_connect("localhost","root","root","itcast_cms"); 
// 检查连接 
if ($con) 
{ 
  //var_dump($con);  
  //echo '连接成功!';
} 
else
{
    die("连接错误: " . mysqli_connect_error()); 
}

//$sql="select * from users where name='jj'";
$sql="select * from users where name='".$name."'";
//// 执行查询函数   mysqli_query($con,"SELECT * FROM users");
$result=mysqli_query($con,$sql);
//var_dump($result);

// 关联数组
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$row = mysqli_fetch_array($result);  //获取一行数据
// 获取数据 
//$row =mysqli_fetch_all($result,MYSQLI_ASSOC); //获取所有数据

//var_dump($row);
//echo '身份证号码:',$row[1]['personcode']; //输出personcode列一行数据
//echo '密码:',$row['password']; //输出personcode列一行数据

//echo $captcha;
//if($_SESSION['authcode']=$captcha)
if (strtolower($captcha)==strtolower($_SESSION['authcode'])) //strtolower()转换成小写函数
{
  
  if(isset($row['name']))
  {
    // $_SESSION['passno']=$row['passno'];
    $_SESSION['name']=$row['name'];
    if($row['password']==$password)
    {
      if($row['limits']==$limit && $limit=='1' )
      {
    //  echo "存在这个用户!";
    
    //sleep(3); 
    //header("location:index.html");
    //echo "<script> alert('登陆成功!');parent.location.href='../test/index.php'; </script>"; 
    $_SESSION['student']="student";
    echo "<script> alert('登陆成功!');parent.location.href='./student/student_layout.php'; </script>"; 
      }
      elseif($row['limits']==$limit && $limit=='2' )
       {
        $_SESSION['admin']="admin";
        echo "<script> alert('登陆成功!');parent.location.href='./admin/admin_layout.php'; </script>"; 
       }
       elseif($row['limits']==$limit && $limit=='3' )
       {
        $_SESSION['teacher']="teacher";
        echo "<script> alert('登陆成功!');parent.location.href='./teacher/teacher_layout.php'; </script>"; 
       }
       else
       {
         echo '不存在此用户!';
       }
  }
   else
   {
    //echo "密码错误!"; 
    echo "<script> alert('密码错误!');parent.location.href='login.html'; </script>"; 

   }
 }
 else
 {
    //echo "用户不存在!"; 
    echo "<script> alert('用户不存在!!');parent.location.href='login.html'; </script>"; 
 }

}
else
{
    echo "验证错误!";
}