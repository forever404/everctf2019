<?php 
$str = $_GET["keyword"];
$str2=str_replace(">","",$str);
$str3=str_replace("<","",$str2);
$str4=str_replace("<script","<scr_ipt",$str3);
$str5=str_replace("on","o_n",$str4);
echo "<h2 align=center>oooops,你搜索的".htmlspecialchars($str5)."好像没有</h2>";
?>
