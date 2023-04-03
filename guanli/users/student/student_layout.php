<?php
session_start();

if(isset($_SESSION['name'])&&$_SESSION['student']=="student")
{
        $name=$_SESSION['name'];
        // $name=$_SESSION['name'];
        // echo $name;
        require  "./view/student_layout.html";

}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}