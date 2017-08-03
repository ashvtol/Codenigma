<?php ob_start(); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php
	$query3 = mysql_query("SELECT time FROM members WHERE username = '$_SESSION[username]' ") or die(mysql_error());
		$found_user = mysql_fetch_array($query3);	
		$currtime=time();
		if($found_user['time']<$currtime){
		header("location:../scripts/logout.php") ;  
		}
?>