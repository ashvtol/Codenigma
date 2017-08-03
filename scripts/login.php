<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
</html>

<head>
<title>eJournal</title>
<script type="text/javascript" src="../includes/js/jquery.js"></script>
<style type="text/css">
@import url(../includes/css/style.css);
</style>
<script src="jquery.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){	$("#header").fadeIn(500);
									$("#header_stripe").fadeIn(1000);
									$("#question_pannel").fadeIn(2000);
									$("#header_stripe_bottom").fadeIn(500);
									$("#footer").fadeIn(1500);
									
								});
								
</script>



</head>
<body><div id="header" style="display:none">
	<div id="mslogo"><img src="../includes/img/logo1.png" height="120 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
	<div id="nit"><img src="../includes/img/nit.png" height="120 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
	<div id="cdlogo"><img src="../includes/img/cdlogo.png" height="300 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
  <br>
  
</div>
 
<hr id="header_stripe" style="display:none">

<hr id="header_stripe_bottom" style="display:none">
<div>
<?php
//echo"PHP works fine";


function Login()
{
$password = md5($_POST['password']);
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
    $query1 = mysql_query("SELECT * FROM members WHERE username = '$_POST[username]' and  password = '$password' ") or die(mysql_error());
	mysql_query("UPDATE members SET lparameter = '1' WHERE username = '$_POST[username]' and  password = '$password'  ") or die(mysql_error());
   // $query2 = mysql_query("SELECT * FROM members WHERE password = '$password' ") or die(mysql_error());


	//echo "<br>"."THE Login IS WORKING";
   if (mysql_num_rows($query1) == 0 )//or mysql_num_rows($query2) ==0)
  {
	echo"<h2>Invalid username or password!<h2>";
	  echo '<script>
		$(document).ready(function () {
    window.setTimeout(function () {
        location.href = "../index.html";
    }, 1000)
	});
		</script>';
  }
    else
    {
        $query3 = mysql_query("SELECT * FROM members WHERE username = '$_POST[username]' and  password = '$password' ") or die(mysql_error());
		$found_user = mysql_fetch_array($query3);
		$_SESSION['lparameter']=$found_user['lparameter'];
		$_SESSION['name']=$found_user['name'];
		$_SESSION['id']=$found_user['id'];
		$_SESSION['username']=$found_user['username'];
		
		mysql_query("UPDATE members SET level_parameter = 1 WHERE username = '$_POST[username]' and  password = '$password' ");
		//echo $_SESSION['name'];
		echo"<h2>Hello World!<h2>";
		echo '<script>
		$(document).ready(function () {
    window.setTimeout(function () {
        location.href = "q-index.php";
    },0)
	});
		</script>';
		
    }
	//echo "SIGN UP ENDED";
}
else
{
	header( 'Location: ../index.html' ) ;
}
}
//echo "Welcome ". $_POST["name"]." your username is: ".$_POST["username"]." and email is: ".$_POST["email"]."<br />";
Login();
?>


</div> 
   
<div id="footer" style="display:none;">
<a href="....">About</a> &nbsp;&nbsp;&nbsp;
<a href="...">Design & Logic</a>&nbsp;&nbsp;&nbsp;
<a href="....">Queries</a>&nbsp;&nbsp;&nbsp;
<a href="....">Privacy & Terms</a>&nbsp;&nbsp;&nbsp;

</div>
</body>
</html>
<?php require_once("../includes/connection_close.php"); ?>