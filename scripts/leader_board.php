<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>

<table class="hovertable">
   <tr>
      <th>Rank</th>
      <th>User</th>
      <th>Score</th>
      
    </tr>
<?php


    $query1 = mysql_query("SELECT * FROM members order by score desc") or die(mysql_error());
   // $query2 = mysql_query("SELECT * FROM members WHERE password = '$password' ") or die(mysql_error());


        $c = 1;
		
		while($found_user = mysql_fetch_array($query1))
		{
			//echo '<b><a href="edit.php?date='{$found_user["date"]}'"'. id='{$found_user["date"]}'.'>';
			echo "<tr onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\"> <td>";
		   	echo $c."&nbsp&nbsp</td>";
			echo "<td>&nbsp&nbsp".$found_user["username"]."&nbsp&nbsp</td>";
			echo "<td>&nbsp&nbsp".$found_user["score"]."&nbsp&nbsp</td>";
			print "</tr>";
			$c++;
		}
			
	
	//echo "SIGN UP ENDED";
	
?>

<?php require_once("../includes/connection_close.php"); ?>