<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php require_once("../includes/question.php"); ?>
<?php require_once("../includes/ans-or-not.php"); ?>
<?php require_once("../includes/footer.php"); ?>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" />
<input name="next" type="submit" id="next" value="Next" onclick= "window.location='5.php'" />
<input name="back" type="submit" id="back" value="Back" onclick= "window.location='3.php'" />
<input name="qindex" type="submit" id="qindex" value="Q-index" onclick= "window.location='q-index.php'" />
<?php 
$uid=$_SESSION['id'];
$query = mysql_query("SELECT * FROM user_response WHERE id = '$uid' ") or die(mysql_error());
$found_user = mysql_fetch_array($query);
if($found_user['q4']==-1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Wrong Answer</h1></div>";
	exit(0);
	  
}
if($found_user['q4']==1) //change question id ie. 'q1' for other questions.
{
	echo "<div id='message'><h1>Correct - Response Recorded</h1></div>";
	exit(0);
	  
}

?>

<form action="ans.php?id=4" method="post" id="fq1"> <!-- Change 'id' according to the question number -->
<div id="questions" style="display:none;">
<p><pre>Find the output.

int main()
{
  int a[2][2] = {1, 2, 3, 4};
    int i, j;
    int *p[] = {(int*)a, (int*)a+1, (int*)a+2};
    for(i=0; i<2; i++)
   {
    for(j=0; j<2; j++)
    {
    cout&#60;&#60;*(*(p+i)+j)&#60;&#60;*(*(j+p)+i)&#60;&#60;*(*(i+p)+j)&#60;&#60;*(*(p+j)+i)&#60;&#60;endl;
    }
   }
    return 0;
}

</p></pre>
<hr>
<pre>
A)  1, 1, 1, 1
    2, 3, 2, 3
    3, 2, 3, 2
    4, 4, 4, 4
	
B)  1, 1, 1, 1
    2, 2, 2, 2
    2, 2, 2, 2
    3, 3, 3, 3
	
C)  1, 2, 1, 2
    2, 3, 2, 3
    3, 4, 3, 4
    4, 2, 4, 2
	
D)  1, 2, 3, 4
    2, 3, 4, 1
    3, 4, 1, 2
    4, 1, 2, 3
</pre>

<p>
<hr>
Select the right answer

</p>
<!-- Change the name 'q1' for other questions -->
<input name="q4" type="radio" value="1">&nbsp;#option1</input>&nbsp;&nbsp;&nbsp;  
<input name="q4" type="radio" value="2">&nbsp;#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q4" type="radio" value="3">&nbsp;#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q4" type="radio" value="4">&nbsp;#option4</input>&nbsp;&nbsp;&nbsp;
</div>


<!-- Form Ends here -->

<div id = "Submit" >

<input id="q_submit" type="submit" value="Submit" /> 
</div>
</form>
<?php require_once("../includes/connection_close.php"); ?>