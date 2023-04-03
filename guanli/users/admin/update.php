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
$name= $_POST['name'];
$password=$_POST['password'];
$limits=$_POST['limits'];
$personcode=$_POST['personcode'];
$passno=$_POST['passno'];
$photo=$_POST['photo'];
//$personcode=$_POST['personcode'];
echo $_FILES["photo"]["name"];
echo $_FILES["photo"]["size"];

$photo='';
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["photo"]["name"]);//explode(separator,string,limit) 函数把字符串打散为数组。separator 必需。规定在哪里分割字符串。string 	必需。要分割的字符串。
//echo $_FILES["photo"]["size"];
$extension = end($temp);     // 获取文件后缀名 end() 函数将内部指针指向数组中的最后一个元素，并输出。
if ((($_FILES["photo"]["type"] == "image/gif")
|| ($_FILES["photo"]["type"] == "image/jpeg")
|| ($_FILES["photo"]["type"] == "image/jpg")
|| ($_FILES["photo"]["type"] == "image/pjpeg")
|| ($_FILES["photo"]["type"] == "image/x-png")
|| ($_FILES["photo"]["type"] == "image/png"))
&& ($_FILES["photo"]["size"] < 10004800)   // 小于 10000 kb
&& in_array($extension, $allowedExts))//in_array() 函数搜索数组中是否存在指定的值。
{
	if ($_FILES["photo"]["error"] > 0)// 由文件上传导致的错误代码
	{
		echo "错误：: " . $_FILES["photo"]["error"] . "<br>";
	}
	else
	{
		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
		if (file_exists("upload/" . $_FILES["photo"]["name"]))//file_exists() 函数检查文件或目录是否存在。
		{
			echo $_FILES["photo"]["name"] . " 文件已经存在。 ";
		}
		else
		{
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);//move_uploaded_file() 函数将上传的文件移动到新位置。file 	必需。规定要移动的文件。newloc 	必需。规定文件的新位置。
			
		}
        $photo="upload/" . $_FILES["photo"]["name"];
	}
}





// 检查连接 
if ($con) 
{ 

// $sql="update set  from users  where id=".$id;

// $result = mysqli_query($con,$sql);

$sql = "UPDATE users SET name='$name',password='$password',limits='$limits' ,personcode='$personcode' ,passno='$passno' ,photo='$photo' WHERE id='$id'";
if ($con->query($sql) === TRUE) {    
    echo "<script> alert('修改成功!');parent.location.href='admin_layout.php'; </script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

mysqli_close($con);