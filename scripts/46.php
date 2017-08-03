<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='47.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='45.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q46']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
}
if($found_user['q46']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=46" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><pre>
Find the output for the following C program
	#include <stdio.h>
	void main(void);
	int newval(int);
	void main(void) {
		int ia[]={12,24,45,0};
		int i;
		int sum=0;
		for(i=0; ia[i]; i++) {
			sum += newval(ia[i]);
		}
		printf("Sum= %d",sum);
	}
	int newval(int x) {
		static int div=1;
		return(x/div++);
	}
</pre>
</p>
<hr>
<pre>
a:56      
b:22    
c:39   
d:69
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q46" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q46" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q46" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q46" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>

<?php require_once("../includes/connection_start.php"); ?>