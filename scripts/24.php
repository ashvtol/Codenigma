<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='25.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='23.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q24']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
}
if($found_user['q24']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=24" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><h2>Q24-25</h2><pre>
The following code segment is executed on a processor 
which allows only register operands in its instructions. 
Each instruction can have atmost two source operands and 
one destination operand. Assume that all variables are 
dead after this code segment. 
 
c = a + b; 
d = c * a; 
e = c + a; 
x = c * c; 
if (x > a) { 
 y = a * a; 
} 
else { 
 d = d * d; 
 e = e * e; 
} 


Suppose the instruction set architecture of the processor 
has only two registers. The only allowed compiler optimization 
is code motion, which moves statements from one place to another 
while preserving correctness. What is the minimum number of 
spills to memory in the compiled code? 
</pre>
</p>
<hr>
<pre>
(A) 0 
(B) 1 
(C) 2 
(D) 3 
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q24" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q24" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q24" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q24" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>

<?php require_once("../includes/connection_start.php"); ?>