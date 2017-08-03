<?php ob_start(); ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>


<?php

        function verify(){
		$user_id=$_SESSION['id'];
		//while($i<5){
		$i =  $_GET['id'];
		$query3 = mysql_query("SELECT * FROM ce_answers where q_id='$i'") or die(mysql_error());
		$ans_array = mysql_fetch_array($query3);
		//echo $_POST['q"$i"'];
		if($_POST["q$i"]==$ans_array['answers'])
		{
					
					mysql_query( "update user_response set q$i=1 where id = '$user_id'") or die(mysql_error());
					mysql_query( "update members set score = score+3 where id = '$user_id'") or die(mysql_error());
		}
		else
		{
			
			mysql_query( "update user_response set q$i=-1 where id = '$user_id'") or die(mysql_error());
			mysql_query( "update members set score = score-1 where id = '$user_id'") or die(mysql_error());
		}
		//$refer = $i.".php";
		//echo $refer;
		$previous_page=$_SERVER['HTTP_REFERER'];
		header( "location:$previous_page" );
		//$i=$i+1;
		//}
		//$id_user = $_SESSION['id'];
		//mysql_query("UPDATE members SET level_parameter = level_parameter+1 WHERE id='$id_user'");
		}
		verify();
		
?>
<?php require_once("../includes/footer.php"); ?>