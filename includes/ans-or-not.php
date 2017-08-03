<div id="hor_line" style="display:none;"></div>
<div id="unanswered_questions" style="display:none"; >
<?php
$user_id=$_SESSION['id'];
$query = mysql_query("select * from user_response where id='$user_id'");
$found_user = mysql_fetch_array($query);
$i=1;
$p=0;
$now = time();
$query = mysql_query("SELECT time FROM members WHERE username = '$_SESSION[username]' ") or die(mysql_error());
		$found_user1 = mysql_fetch_array($query);	
		$future_date=$found_user1['time'];
$difference=$future_date-$now;
echo "<div id='remaining' >Time Remaining :",floor($difference/60),"min</div>";
//echo 'Time Remaining : ',floor($difference/60),' min';
echo "<hr>";
$counter = 0;
$hrcounter=0;
while($i<54)
{
	
	
	
	if($found_user["q$i"]==0)
	{
		if($i>=51  and $hrcounter==0)
		{	
			echo "<hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$hrcounter++;

		}
		if($i>50)
		{
			$p=($i-50);
			echo "<a display:block class='q-index-links-ans-or-not' href='$i.php'> $p</a>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		else
		{
			
			if($counter % 5 == 0 and $counter!=0)
			{
				//echo "$counter % 5";
				echo "<br>";
				echo "&nbsp;&nbsp;"; 
			}
			else
			{
				echo "&nbsp;&nbsp;";
			}
			$counter += 1;
			echo "<a display:block class='q-index-links-ans-or-not' href='$i.php'>$i</a>";
			if($i<=9)
			{
				echo "&nbsp;&nbsp;";
			}
			echo "&nbsp;&nbsp;";
			
			
			
		}
	}
	
	$i = $i+1;
}

?>
</div>
<div id="answered_questions" style="display:none";>
<?php
$user_id=$_SESSION['id'];
$query = mysql_query("select * from user_response where id='$user_id'");
$found_user = mysql_fetch_array($query);
$i=1;
echo "<div id='answered'>Answered</div>";
echo "<hr>";
$counter=0;
$hrcounter=0;
while($i<55)
{
	
	if($found_user["q$i"]!=0)
	{
		if($i>=51  and $hrcounter==0)
		{	
			echo "<hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$hrcounter++;

		}
		if($i>50)
		{
			$p=($i-50);
			echo "<a display:block class='q-index-links-answered' href='$i.php'>$p</a>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		else
		{
			
			if($counter % 5 == 0 & $counter!=0)
			{
				//echo "$counter % 5";
				echo "<br>";
				echo "&nbsp;&nbsp;"; 
			}
			else
			{
				echo "&nbsp;&nbsp;";
			}
			$counter += 1;
			echo "<a display:block class='q-index-links-answered' href='$i.php'>$i</a>";
			if($i<10)
			{
				echo "&nbsp;&nbsp;";
			}
			echo "&nbsp;&nbsp;";
			
			
			
		}
	}
	$i = $i+1;
}

?>

</div>

<div id="qindex">

</div>