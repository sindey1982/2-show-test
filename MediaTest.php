<?php
/*include 'index.php';

//$file = fopen("shuiguo.jpg","w");
$filename = "./bg-13.jpg";
// 读取文件
$fp = fopen($filename,"rb");
$data   = fread($fp,filesize($filename));
$result = uploadPhoto($data);
echo $result;
$photo = json_decode($result,true);*/
session_start();
$_SESSION['username']='test@gmail.com';
$_SESSION['profilename']='sfsdf';
$_SESSION['photoWallCount']=20;
$_SESSION['photoCount']=5;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title></title>
<style >
	.title{
	font-size:50px;
 	font-weight:bold;
	}
</style>
<script >

</script>
</head>
<body>
<div id="content">
 <form id="uploadForm" action="../media/index.php" method="post" enctype="multipart/form-data">
           	<input type="hidden" name="code" value="2B455899-7F5F-4A7D-913B-0A76D1F97675" />
            <p class="file_choose">
            	<input name="photowallId" id="photowallId" type="text"  />
            	<input name="photo_binary_data[]" id="file_upload" type="file"  multiple="multiple"/>
            </p>
            <input type="submit" value='提交'></input>
 </form>
</div>
</body>
</html>