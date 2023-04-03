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

$con= db_conn($config);
$id=$_POST['id'];
$question= $_POST['question'];
$answer=$_POST['answer'];
$topic_id=$_POST['topic_id'];
$answer_a=$_POST['answer_a'];
$answer_b=$_POST['answer_b'];
$answer_c=$_POST['answer_c'];
$answer_d=$_POST['answer_d'];
$str1='';
foreach ($answer as $v)
{
    $str1.=$v;
}

// 检查连接 
if ($con) 
{ 
$sql = "UPDATE t_duo SET question='$question',answer='$str1',topic_id=$topic_id ,answer_a='$answer_a' ,answer_b='$answer_b' ,answer_c='$answer_c',answer_d='$answer_d' where id=".$id;
if ($con->query($sql) === TRUE) {    
    echo "<script> alert('修改成功!');parent.location.href='./teacher_layout.php'; </script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

mysqli_close($con);