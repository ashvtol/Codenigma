<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php
//echo"PHP works fine";


if(!isset($_SESSION['lparameter']))
{
	
	//re-direct function when lparameter is in the set.
   header( 'Location: ../index.html' ) ;


}
?>
<?php 

echo $_POST['q1'];

?>



<?php
	// 5. Close connection
	mysql_close($connection);
?>
