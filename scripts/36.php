<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='37.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='35.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q36']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
}
if($found_user['q36']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=36" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><pre>
Which of the following statements are correct in C#?
1. All operators in C#.NET can be overloaded.
2. We can use the new modifier to modify a nested type if 
   the nested type is hiding another type.
3. In case of operator overloading all parameters must be
   of the different type than the class or struct that declares
   the operator.
4. Method overloading is used to create several methods with 
   the same name that performs similar tasks on similar data types.
5. Operator overloading permits the use of symbols to represent 
   computations for a type.
</pre>
</p>
<hr>
<pre>
A. 1, 3
B. 2, 4
C. 2, 5
D. 3, 4
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q36" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q36" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q36" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q36" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>

<?php require_once("../includes/connection_start.php"); ?>