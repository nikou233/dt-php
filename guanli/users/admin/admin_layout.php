<?php
require "../../comment/function.php";
session_start();


if(isset($_SESSION['name'])&&$_SESSION['admin']=="admin")
  {
    $name=$_SESSION['name'];
     require "./view/admin_layout.html";
  }

else
{
    echo "<script> alert('你还没有登录,请登录!');parent.location.href='.././login.html'; </script>"; 
}
    

