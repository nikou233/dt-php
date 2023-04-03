<?php
require "../../comment/function.php";
session_start();

if(isset($_SESSION['name']))
{

  $name=$_SESSION['name'];
  //echo $name;
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='login2.html'; </script>"; 
}

$con= db_conn($config);
$id = $_POST['id'];
$question= $_POST['question'];
$answer=$_POST['answer'];
$topic_id=$_POST['topic_id'];
//$personcode=$_POST['personcode'];
// 检查连接 
if ($con) 
{ 

// $sql="update set  from users  where id=".$id;

// $result = mysqli_query($con,$sql);

$sql = "UPDATE t_panduan SET question='$question',answer='$answer',topic_id='$topic_id' WHERE id=".$id;
if ($con->query($sql) === TRUE) {    
    echo "<script> alert('修改成功!');parent.location.href='./teacher_layout.php'; </script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

mysqli_close($con);