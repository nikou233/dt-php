<?php
require "../../comment/function.php";

session_start();
$con= db_conn($config);

if(isset($_SESSION['name']))
{

  $name=$_SESSION['name'];
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}
$question= $_POST['question'];
$answer=$_POST['answer'];
$topic_id=$_POST['topic_id'];
$answer_a=$_POST['answer_a'];
$answer_b=$_POST['answer_b'];
$answer_c=$_POST['answer_c'];
$answer_d=$_POST['answer_d'];


if ($con) 
{ 

$sql="INSERT INTO t_dan(question,answer,topic_id,answer_a,answer_b,answer_c,answer_d) VALUES('".$question."','".$answer."',".$topic_id.",'".$answer_a."','".$answer_b."','".$answer_c."','".$answer_d."')";

if ($con->query($sql) === TRUE) {    
    echo "<script> alert('添加成功!');parent.location.href='./teacher_layout.php'; </script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

mysqli_close($con);