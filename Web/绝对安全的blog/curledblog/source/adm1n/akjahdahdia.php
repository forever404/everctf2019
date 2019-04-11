<!DOCTYPE html><!--STATUS OK--><html>
<head>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> 
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>后台</title>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 
	<div class="navbar-header">
		<a class="navbar-brand" href="../index.php">Curled_blog</a>
	</div>
	<ul class="nav nav-tabs">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">文章管理</a></li>
	<li><a href="../index.php">退出登录</a></li>
</ul>

	</div>
</nav>
<section id="writing" style="text-align: center;">
     <?php 
     header("content-type:text/html;charset=utf-8"); 
	ini_set("display_errors", 0);
	if(strstr($_SERVER["HTTP_REFERER"],'index.php'))
		{
			ini_set("display_errors", 0);
$us = $_POST["username"];
$ps = $_POST["password"];
if($us==="root"&&$ps==="12345678")
echo "<script> alert('登陆成功！');</script>";
else
{
	echo "<script> alert('密码错误'); ;parent.location.href='./index.php'</script>"; 
}
		
		}
	else
		{
		echo"<script> alert('未登录！');
		parent.location.href='./index.php'</script>;";
		}

?>  
<h2>哈哈哈，这儿太安全了，我把一半的flag藏在这儿：everctf{rkl_1</h2>
<h2>剩下的一半就自己搜索吧</h2>
<?php
highlight_file("asgfasgasw.php");
?>
    </section>
</body>
<footer class="footer navbar-fixed-bottom ">
    <div class="container">
    <div class="footer-left">
    Copyright &copy; 2019 Powered by curled
  </div>
    </div>
</footer>

</html>