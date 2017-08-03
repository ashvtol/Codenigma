<?php require_once("../includes/session.php"); ?>

<?php require_once("../includes/connection_start.php"); ?>
<?php
//echo"PHP works fine";


if(!isset($_SESSION['lparameter']))
{
	
	//re-direct function when lparameter is in the set.
   header( 'Location: ../index.html' ) ;


}
?>
<?php

		$query3 = mysql_query("SELECT lcount FROM members WHERE username = '$_SESSION[username]' ") or die(mysql_error());
		$found_user = mysql_fetch_array($query3);
		//$_SESSION['lparameter']=$found_user['lparameter'];
		//$_SESSION['name']=$found_user['name'];
		//$_SESSION['id']=$found_user['id'];
		
		if($found_user['lcount']==0)
		{
		
		$query3 = mysql_query("SELECT lcount FROM members WHERE username = '$_SESSION[username]' ") or die(mysql_error());
		$found_user = mysql_fetch_array($query3);	
		if($found_user['lcount']==0)
		{
		$date=time()+5400;
		mysql_query("UPDATE members SET lcount = 1 WHERE username = '$_SESSION[username]'");
			mysql_query("UPDATE members SET time = $date WHERE username = '$_SESSION[username]' ");
		}
		}
?>
<?php
echo "<div id='welcome_name' style='display:none'>Weclome "."<b><u>".$_SESSION['name']."</b></u></div>";
?>
</html>

<head>
<title>Codenigma</title>
<script type="text/javascript" src="../includes/js/jquery.js"></script>
<style type="text/css">
@import url(../includes/css/style.css);


</style>
 <script>
	$(document).ready(function(){	$("#header").fadeIn(500);
									$("#header_stripe").fadeIn(1000);
									$("#question_pannel").fadeIn(2000);
									$("#header_stripe_bottom").fadeIn(500);
									$("#footer").fadeIn(1500);
									$("#welcome_name").fadeIn(1500);
									$("#logout_button").fadeIn(1500);
									$("#unanswered_questions").fadeIn(1500);
									$("#answered_questions").fadeIn(1500);
									$("#hor_line_1").fadeIn(1500);
									$("#hor_line").fadeIn(1500);
									
									
								});
								
</script>
<script>


</script>


</head>
<body><div id="header" style="display:none;">
	<div id="mslogo"><img src="../includes/img/logo1.png" height="120 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
	<div id="nit"><img id="rou" src="../includes/img/nit.png" height="120 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
	<div id="cdlogo"><img src="../includes/img/cdlogo.png" height="300 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
  <br>
  
</div>
 
<hr id="header_stripe" style="display:none;">

<hr id="header_stripe_bottom" style="display:none;">


<!--
<a href=""><div id="questions">
<p>1. Question title goes here</h3><p>Question description here ............................................................................
.............................................................................................................................................
</p>
</a>
<hr>
<div id="Max_Score">
Maximum Socre :   &nbsp;&nbsp;&nbsp; Difficulty:Moderate
</div>
</div>

<a href=""><div id="last_questions">
<p>1. Question title goes here</h3><p>Question description here ............................................................................
.............................................................................................................................................
</p>
</a>
<hr>
<div id="Max_Score">
Maximum Socre :   &nbsp;&nbsp;&nbsp; Difficulty:Moderate
</div>
</div>




<form action="ans.php" method="post" id="fq1">
<div id="questions">
<p>1. Question description here ............................................................................
............................................................................................................................................. 
</p>
<hr>
<p>
Select the right answer
</p>
<input name="q1" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;
<input name="q1" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q1" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q1" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>




<div id="questions">
<p>2. Question description here ............................................................................
............................................................................................................................................. 
</p>
<hr>
<p>
Select the right answer
</p>
<input name="q2" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;
<input name="q2" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q2" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q2" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>

<div id="questions">
<p>3. Question description here ............................................................................
............................................................................................................................................. 
</p>
<hr>
<p>
Select the right answer
</p>
<input name="q3" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;
<input name="q3" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q3" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q3" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>

<div id="questions">
<p>4. Question description here ............................................................................
............................................................................................................................................. 
</p>
<hr>
<p>
Select the right answer
</p>
<input name="q4" type="radio" value="1">#option1</input>&nbsp;&nbsp;&nbsp;
<input name="q4" type="radio" value="2">#option2</input>&nbsp;&nbsp;&nbsp;
<input name="q4" type="radio" value="3">#option3</input>&nbsp;&nbsp;&nbsp;
<input name="q4" type="radio" value="4">#option4</input>&nbsp;&nbsp;&nbsp;
</div>




<input type="submit" value="Send" /> 
-->
</form>
<input type="submit" value="Logout" id="logout_button" onclick= "window.location='logout.php'" style="display:none"; />
<div id="footer"  style="display:none;">
<a href="../index.html">Home</a> &nbsp;&nbsp;&nbsp;
<a href="../footer/rules.html">Rules</a>&nbsp;&nbsp;&nbsp;
<a href="../footer/questionare.html">Questionare</a>&nbsp;&nbsp;&nbsp;
<a href="../footer/sponsors.html">Sponsors</a>&nbsp;&nbsp;&nbsp;
<a href="../footer/follow.html">Follow</a>&nbsp;&nbsp;&nbsp;

</div>




<div id="question_pannel" style="display:none;">
<h1>Questions - SET-I</h1>
<h2><?php 
$now = time();
$query = mysql_query("SELECT time FROM members WHERE username = '$_SESSION[username]' ") or die(mysql_error());
		$found_user = mysql_fetch_array($query);	
		$future_date=$found_user['time'];
$difference=$future_date-$now;
echo 'Time Remaining : ',floor($difference/60),' min';

?></h2>
<hr>
<h2>
<br>
<a id="q1" href="1.php">1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q2" href="2.php">2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q3" href="3.php">3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q4" href="4.php">4</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q5" href="5.php">5</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q6" href="6.php">6</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q7" href="7.php">7</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q8" href="8.php">8</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q9" href="9.php">9</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q10" href="10.php">10</a>&nbsp;&nbsp;&nbsp;<br><BR>
<a id="q11" href="11.php">11</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q12" href="12.php">12</a>&nbsp;&nbsp;&nbsp;
<a id="q13" href="13.php">13</a>&nbsp;&nbsp;&nbsp;
<a id="q14" href="14.php">14</a>&nbsp;&nbsp;&nbsp;
<a id="q15" href="15.php">15</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q16" href="16.php">16</a>&nbsp;&nbsp;&nbsp;
<a id="q17" href="17.php">17</a>&nbsp;&nbsp;&nbsp;
<a id="q18" href="18.php">18</a>&nbsp;&nbsp;&nbsp;
<a id="q19" href="19.php">19</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a id="q20" href="20.php">20</a>&nbsp;&nbsp;&nbsp;<br><br>
<a id="q21" href="21.php">21</a>&nbsp;&nbsp;&nbsp;
<a id="q22" href="22.php">22</a>&nbsp;&nbsp;&nbsp;
<a id="q23" href="23.php">23</a>&nbsp;&nbsp;&nbsp;
<a id="q24" href="24.php">24</a>&nbsp;&nbsp;&nbsp;
<a id="q25" href="25.php">25</a>&nbsp;&nbsp;&nbsp;
<a id="q26" href="26.php">26</a>&nbsp;&nbsp;&nbsp;
<a id="q27" href="27.php">27</a>&nbsp;&nbsp;&nbsp;
<a id="q28" href="28.php">28</a>&nbsp;&nbsp;&nbsp;
<a id="q29" href="29.php">29</a>&nbsp;&nbsp;&nbsp;
<a id="q30" href="30.php">30</a>&nbsp;&nbsp;&nbsp;<br><br>
<a id="q31" href="31.php">31</a>&nbsp;&nbsp;&nbsp;
<a id="q32" href="32.php">32</a>&nbsp;&nbsp;&nbsp;
<a id="q33" href="33.php">33</a>&nbsp;&nbsp;&nbsp;
<a id="q34" href="34.php">34</a>&nbsp;&nbsp;&nbsp;
<a id="q35" href="35.php">35</a>&nbsp;&nbsp;&nbsp;
<a id="q36" href="36.php">36</a>&nbsp;&nbsp;&nbsp;
<a id="q37" href="37.php">37</a>&nbsp;&nbsp;&nbsp;
<a id="q38" href="38.php">38</a>&nbsp;&nbsp;&nbsp;
<a id="q39" href="39.php">39</a>&nbsp;&nbsp;&nbsp;
<a id="q40" href="40.php">40</a>&nbsp;&nbsp;&nbsp;<br><br>
<a id="q41" href="41.php">41</a>&nbsp;&nbsp;&nbsp;
<a id="q42" href="42.php">42</a>&nbsp;&nbsp;&nbsp;
<a id="q43" href="43.php">43</a>&nbsp;&nbsp;&nbsp;
<a id="q44" href="44.php">44</a>&nbsp;&nbsp;&nbsp;
<a id="q45" href="45.php">45</a>&nbsp;&nbsp;&nbsp;
<a id="q46" href="46.php">46</a>&nbsp;&nbsp;&nbsp;
<a id="q47" href="47.php">47</a>&nbsp;&nbsp;&nbsp;
<a id="q48" href="48.php">48</a>&nbsp;&nbsp;&nbsp;
<a id="q49" href="49.php">49</a>&nbsp;&nbsp;&nbsp;
<a id="q50" href="50.php">50</a>&nbsp;&nbsp;&nbsp;<br><br>
</h3>
<hr>
<h1>Questions - SET-II</h1>
<h2>
<a id="q51" href="51.php">1</a>&nbsp;&nbsp;&nbsp;
<a id="q52" href="52.php">2</a>&nbsp;&nbsp;&nbsp;
<a id="q53" href="53.php">3</a>&nbsp;&nbsp;&nbsp;
</h2>
</div>
<div id="social">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/MicrosoftCampusClub" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>
<div id="hor_line_1" style="display:none;" ></div>
<?php require_once("../includes/ans-or-not.php"); ?>
</body>
</html>
<?php require_once("../includes/connection_close.php"); ?>