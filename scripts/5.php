<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='6.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='4.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q5']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
	  
}
if($found_user['q5']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=5" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><pre>
What is the output of the following?
char str[]="Microsoft\0Campus\0Club";
coutstrlen(str)&#60;&#60;str;
</p></pre>
<hr>
<pre>
A) 9Microsoft
B) 21Microsoft\0Campus\0Club
C) 22Microsoft\0Campus\0Club
D) 10Microsoft
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q5" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q5" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q5" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q5" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>
<?php require_once("../includes/connection_start.php"); ?>