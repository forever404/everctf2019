<!DOCTYPE html><!--STATUS OK--><html>
<head>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> 
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
 window.location.href="flag.php"; 
}
</script>
<title>没找到哦</title>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 
	<div class="navbar-header">
		<a class="navbar-brand" href="./index.php">Curled_blog</a>
	</div>
	<ul class="nav nav-tabs">
	<li class="active"><a href="./index.php">Home</a></li>
	<li><a href="#">Github</a></li>
	<li><a href="#">黑客工具</a></li>
</ul>
	<form class="navbar-form navbar-left" role="search" action="search.php" method="GET">
		<div class="form-group">
			<input name="keyword" type="text" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default">搜索</button>
	</form>

	</div>
</nav>

<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace(">","",$str);
$str3=str_replace("<","",$str2);
$str4=str_replace("<script","<scr_ipt",$str3);
$str5=str_replace("on","o_n",$str4);
echo "<h2 align=center>oooops,你搜索的".htmlspecialchars($str5)."好像没有</h2>";
?>
</body>
</html>