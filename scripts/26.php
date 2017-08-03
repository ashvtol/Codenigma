<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='27.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='25.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q26']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
}
if($found_user['q26']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=26" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><h2>Q26 - Q27</h2><pre>
Consider the following operation along with Enqueue and Dequeue 
operations on queues, where k is a global parameter. 
MultiDequeue(Q){ 
 m = k 
 while (Q is not empty) and (m > 0) { 
 Dequeue(Q) 
 m = m - 1 
 } 
 } 
What is the worst case time complexity of a sequence of n queue 
operations on an initially empty 
queue? 
</pre>
</p>
<hr>
<pre>
(A) &Theta;(n) 
(B) &Theta;(n + k) 
(C) &Theta;(nk) 
(D) &Theta;(n^2) 
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q26" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q26" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q26" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q26" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>

<?php require_once("../includes/connection_start.php"); ?>