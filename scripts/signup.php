<?php require_once("../includes/connection_start.php"); ?>
</html>
<head>
<title>CodEnigma</title>
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
<body><div id="header" style="">
	<div id="mslogo"><img src="../includes/img/logo1.png" height="120 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
	<div id="nit"><img src="../includes/img/nit.png" height="120 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
	<div id="cdlogo"><img src="../includes/img/cdlogo.png" height="300 px"> <!-- Here comes codeEnIGMA'S LOGO --></div>
  <br>
  
</div>
 
<hr id="header_stripe" style="">

<hr id="header_stripe_bottom" style="">
<div>
<?php
//echo"PHP works fine";
if(empty($_POST['username']) or empty($_POST['name']) or empty($_POST['password']) or empty($_POST['email']))
{
	header( 'Location: ../index.html' ) ;
}

function NewUser()
{
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]); //encrypted biatch!!
    $confirm =  $_POST["confirm"];
    $email =  $_POST["email"];
    $phoneno =  $_POST["phoneno"];
	
	
	//echo "Welcome ". $_POST["name"]." your username is: ".$_POST["username"]." and password is: ".$_POST["password"]."<br />";
    $query = "INSERT INTO members (name,username,password,email,phoneno) VALUES ('$name','$username','$password','$email','$phoneno')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {
    echo "<br><br>You have been registered<br>";
	echo '<script>
		$(document).ready(function () {
    window.setTimeout(function () {
        location.href = "../index.html";
    }, 2000)
	});
		</script>';
    }
	$query3 = mysql_query("SELECT * FROM members WHERE username = '$_POST[username]' and email = '$_POST[email]' ") or die(mysql_error());
	$found_user = mysql_fetch_array($query3);
	$user_id=$found_user['id'];
	echo $user_id;
	mysql_query( "INSERT INTO user_response(id) VALUES ('$user_id')") or die(mysql_error());
}
function SignUp()
{
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
    $query1 = mysql_query("SELECT * FROM members WHERE username = '$_POST[username]'  ") or die(mysql_error());
    $query2 = mysql_query("SELECT * FROM members WHERE email = '$_POST[email]' ") or die(mysql_error());


	//echo "<br>"."THE SIGNUP IS WORKING";
   if (mysql_num_rows($query1) >0 or mysql_num_rows($query2) >0)
  {
      echo "<h3>Username or Email already registered</h3>";
	  echo '<script>
		$(document).ready(function () {
    window.setTimeout(function () {
        location.href = "../index.html";
    }, 2000)
	});
		</script>';
  }
    else
    {
        NewUser();
    }
	//echo "SIGN UP ENDED";
}
else
{
	//echo "THE SIGNUP NOT WORKING";
}
}
//echo "Welcome ". $_POST["name"]." your username is: ".$_POST["username"]." and email is: ".$_POST["email"]."<br />";
SignUp();
?>


</div> 
   
<?php require_once("../includes/footer.php"); ?>
