<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>

<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='3.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='1.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q2']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
	  
}
if($found_user['q2']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}
?>

<form action="ans.php?id=2" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;" unselectable='on' onselectstart='return false;' onmousedown='return false;'>
<pre><p>int*x, *y;
int a=100;
int b=200;
*x=a;
*y=b;
*x++=++*y;
cout&#60;&#60;x&#60;&#60;&ldquo;_&rdquo;&#60;&#60;y&#60;&#60;*--x;
//Assume memory location of variable a is<br>//5000 and of b is 5016. One Integer occupies 4 bytes.</pre>
<hr><pre>
A) 5000_5020_200
B) 5000_5020_201
C) 100_200_201
D) 5004_5016_201</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q2" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q2" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q2" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q2" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>
<?php require_once("../includes/connection_start.php"); ?>