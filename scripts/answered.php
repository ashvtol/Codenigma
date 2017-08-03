<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php
$user_id=$_SESSION['id'];
$query = mysql_query("select * from user_response where id='$user_id'");
$found_user = mysql_fetch_array($query);
$i=1;
echo "answered questions : ";
while($i<55)
{
	
	
	
	if($found_user["q$i"]!=0)
	echo "q$i";
	echo "&nbsp;&nbsp;";
	$i = $i+1;
}

?>
<?php require_once("../includes/connection_close.php"); ?>