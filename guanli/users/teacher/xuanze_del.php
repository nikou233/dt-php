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
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}



echo $_GET['id'];
$id=$_GET['id'];

$con= db_conn($config);

// 检查连接 
if ($con) 
{ 

$sql="delete  from t_dan  where id=".$id;

//$result = mysqli_query($con,$sql);
if ($con->query($sql) === TRUE) {    
    echo "<script> alert('删除成功!');parent.location.href='./teacher_layout.php'; </script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


}

mysqli_close($con);