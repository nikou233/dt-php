<?php
//连接数据信息
$config=[
	//数据库连接信息
	'DB_CONNECT' => [
		'host' => '127.0.0.1',	  //服务器地址
		'user' => 'root',		  //用户名
		'pass' => 'root',		  //密码
		'dbname' => 'itcast_cms', //默认数据库
		'port' => '3306',		  //端口
	],
	'DB_CHARSET' =>	'utf8',		//字符集
];

//数据库连接
function db_conn($config)
{
    $con=mysqli_connect($config['DB_CONNECT']['host'],$config['DB_CONNECT']['user'],$config['DB_CONNECT']['pass'],$config['DB_CONNECT']['dbname']);
        // 检查连接
        if (!$con)
        {
            die("连接错误: " . mysqli_connect_error());
        }
        else
        { 
            // echo '连接成功！';
        }
return $con;

}
$con= db_conn($config);
echo 'ssss';
$sql="SELECT * FROM users WHERE name='".$name."'";


$result=mysqli_query($con,$sql);

// 关联数组
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$row = mysqli_fetch_array($result);
if(strtolower($code)==strtolower($_SESSION['authcode']) )
{
if($row["name"])
{
     if ($pw==$row["password"])
     {
        $_SESSION['code']=$row["code"];
        $_SESSION['password']=$row["password"];
        $_SESSION['limits']=$row["limits"];
        $_SESSION['passno']=$row["passno"];
        $_SESSION['name']=$row["name"];
        $_SESSION['photo']=$row["photo"];
        //1学生进入考试系统
        if($row["limits"]=='1')  
        {
            
            sleep(3); header("location:../index1.php");
        }
        //2管理员进入管理员页面
        if($row["limits"]=='2')  
        {
            
            sleep(3); header("location:../users.php");
        }
        //3出题老师进入题库-出题界面
        if($row["limits"]=='3')  
        {
            
            sleep(3); header("location:../topic/timu.php");
        }
    }
     else
       {
           echo  "密码错错误";
       }

}
else
{
    echo "找不到此用户名";
}

}
else
{
    echo '<script language="JavaScript">alert("验证码错误",location.href="login.html");</script>';
    
}
// $avatar = $row['photo'];
mysqli_free_result($result);

mysqli_close($con);