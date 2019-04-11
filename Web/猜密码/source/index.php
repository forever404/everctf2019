<?php
	ini_set("display_errors", 0);
	header("content-type:text/html;charset=utf-8"); 
	highlight_file("index.php");
	include("flag.php");
   
     if(isset($_GET['password'])){

        if (strcmp($_GET['password'], $password) == 0) {
            echo $flag;
            exit();
        } else {
            echo "没猜对哟";
        }
	 }
?>