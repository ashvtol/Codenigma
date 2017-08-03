<?php ob_start(); ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php


  $code=$_POST['code'];
  $user = 'msnitr';
  $pass = 'microsoft';
 
  $lang = $_POST['lang']; // C++
  
  $input='10 547 5443 232424 535435 999999 1000000 0 213243 54353 1';
 $out='757560082 197818151 346255999 647292864 285538464 844844694 2 387625635 391860791 4';

  $run = true;
  $private = false;

?>

<?php 
			  $user_id=$_SESSION['id'];
		//while($i<5){
		$i =  $_GET['id'];
		$query3 = mysql_query("SELECT * FROM ce_answers where q_id='$i'") or die(mysql_error());
		$ans_array = mysql_fetch_array($query3);
			  
			  $client = new SoapClient('http://ideone.com/api/1/service.wsdl');
			 
			  $result = $client->createSubmission($user, $pass, $code, $lang, $input, $run, $private);
			 
			  if ($result['error'] == 'OK') {
				$status = $client->getSubmissionStatus($user, $pass, $result['link']);
			 
				if ($status['error'] == 'OK') {
				  while ($status['status'] != 0) {
					sleep(3);
					$status = $client->getSubmissionStatus($user, $pass, $result['link']);
				  }
				}
			 
				$details = $client->getSubmissionDetails($user, $pass, $result['link'], true, true, true, true, true);
			   // echo "Input: <code>".$details['input']."</code><br><br>";
				//echo "Output: <code>".$details['output']."</code>";
//				echo (trim($details['output']));
				if(trim($details['output'])==$out) {
				echo "Successs";
					
					
					
        
		
		//echo $_POST['q"$i"'];
		
						{
									
									mysql_query( "update user_response set q$i=1 where id = '$user_id'") or die(mysql_error());
									mysql_query( "update members set score = score+10 where id = '$user_id'") or die(mysql_error());
						}
						
						
						$previous_page=$_SERVER['HTTP_REFERER'];
						header( "Location:$previous_page" ) ;
						//$i=$i+1;
						//}
						//$id_user = $_SESSION['id'];
						//mysql_query("UPDATE members SET level_parameter = level_parameter+1 WHERE id='$id_user'");
						
						
						
									
									
								}
						else{
				echo "Wrong Answer";
				echo trim($details['output']);
				
			
			//mysql_query( "update user_response set q$i=-1 where id = '$user_id'") or die(mysql_error());
			mysql_query( "update members set score = score-1 where id = '$user_id'") or die(mysql_error());
			$previous_page=$_SERVER['HTTP_REFERER'];
			header( "Location:$previous_page" ) ;
		
				}			
						
								}
				
			
?>




<?php

?>
<?php require_once("../includes/footer.php"); ?>