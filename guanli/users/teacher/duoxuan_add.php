<?php
require "../../comment/function.php";
session_start();
if(isset($_SESSION['name'])&&$_SESSION['teacher']=="teacher")
{

  $name=$_SESSION['name'];
  //echo $name;
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='login2.html'; </script>"; 
}

$con= db_conn($config);
//获取表单提交信息
$question= $_POST['question'];
$answer=$_POST['answer'];
$answer_a=$_POST['answer_a'];
$answer_b=$_POST['answer_b'];
$answer_c=$_POST['answer_c'];
$answer_d=$_POST['answer_d'];
$topic_id=$_POST['topic_id'];
//var_dump($answer);
$str1='';
foreach ($answer as $v)
{
    $str1.=$v;
}
//echo $str1;
//echo $question,$answer;

// 检查连接 
if ($con) 
{ 

$sql="INSERT INTO t_duo(question,answer_a,answer_b,answer_c,answer_d,answer,topic_id) VALUES('".$question."','".$answer_a."','".$answer_b."','".$answer_c."','".$answer_d."','".$str1."',".$topic_id.")";
//mysqli_query($con,$sql)
//if (mysqli_query($con,$sql) === TRUE)
if ($con->query($sql) === TRUE) {    
    echo "<script> alert('新记录添加成功!');parent.location.href='teacher_layout.php'; </script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

mysqli_close($con);