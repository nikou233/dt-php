<?php
require "../../comment/function.php";
session_start();


//考生答题结果
// var_dump($_POST['binary']);

// $_POST['binary'][1]
// $_POST['binary'][2]
// $_POST['binary'][3]
// $_POST['binary'][4]
// $_POST['binary'][5]

//保存用户的考试结果
$total = [];
$sum=0;
//取出表里的标准答案t_panduan，answer这一列的值
$data=[];
$con= db_conn($config);
   
// 判断题阅卷
    if ($con) 
        { 
  
        $sql = "SELECT * from t_panduan ";
       // mysqli_query("set names 'utf8'");
        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=$row;
        foreach($row as $key=> $v)
        {

           if($_POST['binary'][$key+1]===$v['answer'])
           { 
            $total ['binary'][$key+1]=true;
            $sum=$sum+2;
        //   echo "题号：",$v['id'],"答案：",$v['answer'];
        //   echo "<br>";
        //   echo  "考生答案：",$_POST['binary'][$key+1];
        //   echo "<br>";
        }
        else
        {
            $total ['binary'][$key+1]=false;
        }
        }


    }
    if($con)
    {
    $data_dan=[];
    $sql_dan = "SELECT * from t_dan ";
    // mysqli_query("set names 'utf8'");
     $result_dan = mysqli_query($con,$sql_dan);
     $row_dan = mysqli_fetch_all($result_dan,MYSQLI_ASSOC);
     $data_dan=$row;
     foreach($row_dan as $key=> $v)
     {

        if($_POST['single'][$key+1]===$v['answer'])
        { 
         $total ['single'][$key+1]=true;
         $sum=$sum+2;

     }
     else
     {
         $total ['single'][$key+1]=false;
     }
     }
    }

    //多选题
    $data_duo=[];
    if ($con) 
    { 
   
    $sql_duo = "SELECT * from t_duo";
    
   // mysqli_query("set names 'utf8'");
    $result_duo = mysqli_query($con,$sql_duo);
   
    $row_duo = mysqli_fetch_all($result_duo,MYSQLI_ASSOC);
    $data_duo=$row_duo;
    foreach($row_duo as $key=> $v)
    {
       $str1='';
       foreach($_POST['multiple'][$key] as $k1=>$v1)
       {
           $str1.=$v1;
       }
       if($str1==$v['answer'])
       { 
        $total ['multiple'][$key]=true;
        $sum=$sum+2;
    //   echo "题号：",$v['id'],"答案：",$v['answer'];
    //   echo "<br>";
    //   echo  "考生答案：",$_POST['binary'][$key+1];
    //   echo "<br>";
    }
    else
    {
        $total ['multiple'][$key]=false;
    }
    }
   }

   $data_kon=[];
   if ($con) 
   { 
  
   $sql_kon = "SELECT * from t_tiankong ";
   
  // mysqli_query("set names 'utf8'");
   $result_kon = mysqli_query($con,$sql_kon);
  
   $row_kon= mysqli_fetch_all($result_kon,MYSQLI_ASSOC);
   $data_kon=$row_kon;
   foreach($row_kon as $key=> $v)
   {
    // var_dump($v);
      if($_POST['fill'][$key]==$v['answer'])
      { 
       $total ['fill'][$key]=true;
       $sum=$sum+5;

   }
   else
   {
       $total ['fill'][$key]=false;
   }
   }
  }

   //分数保存

   if ($con) 
 { 

 $sql_score= "insert into t_cj(name,cj)  values(?,?)";
 

 //$result_duo = mysqli_query($con,$sql_duo);

 $stmt = mysqli_prepare($con,$sql_score );
//参数绑定，并为已经绑定的变量赋值
mysqli_stmt_bind_param($stmt, 'si', $name, $cj);
$name =$_SESSION['name'];
$cj = $sum;
//执行预处理（第一次执行）
mysqli_stmt_execute($stmt);
 }

 echo "总分数：",$sum;
require "./view/total.html";
mysqli_close($con);