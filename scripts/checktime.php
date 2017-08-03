<?php 
query3 = mysql_query("SELECT time FROM members WHERE username = '$_POST[username]' and  password = '$password' ") or die(mysql_error());
$found_user = mysql_fetch_array($query3);
if(time()>$found_user['time'])
{
header( 'Location: /logout.php' ) ; 
}
?>