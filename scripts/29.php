<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='30.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='28.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q29']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
}
if($found_user['q29']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=29" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><pre>
The height of a tree is defined as the number of edges 
on the longest path in the tree. The function shown in 
the pseudocode below is invoked as height (root) to 
compute the height of a binary tree 
rooted at the tree pointer root. 
int height (treeptr n) 
{ if (n == NULL) return –1; 
 if (n ? left == NULL) 
if (n ? right == NULL) return 0; 
else return ; // Box 1 
else { h1 = height (n ? left); 
if ((n ? right == NULL) return (1+h1); 
else {h2 = height (n ? right); 
return ; //Box 2 
 } 
 } 
} 
The appropriate expressions for the two boxes B1 and B2 are 
</pre>
</p>
<hr>
<pre>
(A) B1: (1 + height(n ? right)) 
    B2: (1 + max(h1, h2)) 
(B) B1: (height(n ? right)) 
    B2: (1 + max(h1, h2)) 
(C) B1: height(n ? right) 
    B2: max(h1, h2) 
(D) B1: (1 + height(n ? right)) 
    B2: max(h1, h2)) 
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q29" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q29" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q29" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q29" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>

<?php require_once("../includes/connection_start.php"); ?>