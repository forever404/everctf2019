<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
 window.location.href="flag.php"; 
}
</script>
<title>弹个窗就给你flag</title>
</head>
<body>
<?php 
ini_set("display_errors", 0);
$str = $_GET["a"];
echo "只要你弹个窗，我就给你flag";
echo "<h2 align=center>a=".$str."</h2>";
?>
</body>
</html>