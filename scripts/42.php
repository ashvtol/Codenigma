<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='43.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='41.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q42']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
}
if($found_user['q42']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=42" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><pre>
Print the output of this program 
#include 
void main()
{
	int  a, b, c, abc = 0;

	a = b = c = 40;

	if (c) {
		int abc;

		abc = a*b+c;
	}

	printf ("c = %d, abc = %d\n", c, abc);
}
</pre>
</p>
<hr>
<pre>
A) c=40, abc=0  
B)c=40,abc=1640  
C)c=40, abc=240   
D)None of these
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q42" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q42" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q42" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q42" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>

<?php require_once("../includes/connection_start.php"); ?>