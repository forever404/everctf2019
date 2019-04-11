<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sqli_resheng</title>
<link rel="icon" href="favicon.ico">
<style>
	body{background:#FFEFD5;}	
</style>
</head>


<body>
<center><h2>欢迎来到sql注入的世界</h2>
	<p>请按序号查询，输入：</p>
	<p>1.查询小王的相关信息</p>
	<p>2.查询小杰的相关信息</p>
	<p>3.查询小刘的相关信息</p>
<form method="get">
	<input type="text" name="id" class="form-control">

	<button type="submit" class="btn btn-sm btn-info">我注！</button>
</form>
</center>

<?php

//including the Mysql connect parameters.
$dbuser ='root';
$dbpass ='gdxfsm,xyxx';
$dbname ="sqli";
$host = 'mysql';

$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
if (!$con)
  {
  echo('Could not connect: ' . mysqli_error());
  }
  
// take the variables 

if(isset($_GET['id']))
{
$id=$_GET['id'];
//logging the connection parameters to a file for analysis.
$fp=fopen('result.txt','a');
fwrite($fp,'ID:'.$id."\n");
fclose($fp);

// connectivity 


$sql="SELECT * FROM admin WHERE id='$id' LIMIT 0,1";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

	if($row)
	{

  	echo '<center>'.'姓名:'. $row['name'].'<br>';

  	echo $row['message'].'</center>';

  	}
	else 
	{

		echo(mysqli_error($con));

	}
}

?>

</body>
</html>





 
