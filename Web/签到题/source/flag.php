<?php
	header("content-type:text/html;charset=utf-8"); 
	ini_set("display_errors", 0);
	$flag = "X5s_1s_cr4zy";
	if(strstr($_SERVER["HTTP_REFERER"],'index.php'))
		echo "everctf{".$flag."}";
	else
		echo"不要耍小聪明哟";
?>