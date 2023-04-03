<?php

session_start();

if(isset($_SESSION['name'])&&$_SESSION['teacher']=="teacher")
{
  $name=$_SESSION['name'];
  require "./view/teacher_layout.html";
}
else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}
