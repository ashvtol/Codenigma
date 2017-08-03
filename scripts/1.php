<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/sessionout.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>


<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='2.php'" />
<input name="q-index" type="submit" id="q-index" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 

$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q1']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
	  
}
if($found_user['q1']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}
?>

<form action="ans.php?id=1" method="post" id="fq1" style="display:none;">
<div id="questions">
<p><pre>What will be the output of the following statements?<br>
char* arr[2]={&ldquo;Codenigma&rdquo;, &ldquo;2014&rdquo;};<br>
cout<<*arr;<br></pre>
</p>
<hr>
<pre>A) Memory address of character ‘C’
B) Codenigma
C) C
D) Codenigma2014</pre>
<p>
<hr>
Select the right answer
</p>

<!-- Change the name 'q1' for other questions -->
<input name="q1" type="radio" value="1">#A</input>&nbsp;&nbsp;&nbsp;  
<input name="q1" type="radio" value="2">#B</input>&nbsp;&nbsp;&nbsp;
<input name="q1" type="radio" value="3">#C</input>&nbsp;&nbsp;&nbsp;
<input name="q1" type="radio" value="4">#D</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->



<div id = "Submit" style="display:none;">

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>
<div id="footer" style="">
<a href="../index.html">Home</a> &nbsp;&nbsp;&nbsp;
<a href="../footer/rules.html">Rules</a>&nbsp;&nbsp;&nbsp;
<a href="../footer/questionare.html">Questionare</a>&nbsp;&nbsp;&nbsp;
<a href="../footer/sponsors.html">Sponsors</a>&nbsp;&nbsp;&nbsp;
<a href="../footer/follow.html">Follow</a>&nbsp;&nbsp;&nbsp;

</div>
<?php require_once("../includes/connection_close.php"); ?>