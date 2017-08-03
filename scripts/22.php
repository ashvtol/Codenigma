<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='23.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='21.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />

<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q22']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
}
if($found_user['q22']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=22" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><h2>Q22-23</h2><pre>
The procedure given below is required to find and replace certain 
characters inside an input character string supplied in array A. 
The characters to be replaced are supplied in array oldc, while 
their respective replacement characters are supplied in array newc. 
Array A has a fixed length of five characters, while arrays oldc 
and newc contain three characters each. However, the procedure is 
flawed. 
 
void find_and_replace (char *A, char *oldc, char *newc) { 
 for (int i=0; i<5; i++) 
 for (int j=0; j<3; j++) 
 if (A[i] == oldc[j]) A[i] = newc[j]; 
 } 
 
The procedure is tested with the following four test cases. 

(1) oldc = &ldquo;abc&rdquo;, newc = &ldquo;dab&rdquo;
(2) oldc = &ldquo;cde&rdquo;, newc = &ldquo;bcd&rdquo;
(3) oldc = &ldquo;bca&rdquo;, newc = &ldquo;cda&rdquo;
(4) oldc = &ldquo;bc&rdquo;, newc = &ldquo;bac&rdquo; 



The tester now tests the program on all input strings of length 
five consisting of characters &lsquo;a&rquo;, &lsquo;b&rsquo;, &lsquo;c&rsquo;, &lsquo;d&rsquo; and &lsquo;e&rsquo; with 
duplicates allowed. If the tester carries out this testing with 
the four test cases given above, how many test cases will be 
able to capture the flaw? 

The procedure is tested with the following four test cases. 
</pre>
</p>
<hr>
<pre>
(A) Only one 
(B) Only two 
(C) Only three 
(D) All four 
</pre><hr>
<p>
Select the right answer
</p>
<!-- Change the name 'q1' for other questions -->
<input name="q22" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q22" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q22" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q22" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->
<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>

<?php require_once("../includes/connection_start.php"); ?>