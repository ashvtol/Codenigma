<?php ob_start(); ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection_start.php"); ?>
<?php


  $code=$_POST['code'];
  $user = 'msnitr';
  $pass = 'microsoft';
 
  $lang = $_POST['lang']; // C++
  
  $input='9 5 9 1 9 9 4 9 3 2 1 8 20 1 6 1 7 2 1 2 8 3 4 3 5 3 9 4 1 4 2 4 3 4 4 4 7 5 6 5 9 6 1 6 4 8 2 8 9 9 4 9 7 5 5';
  $out='7';
/*  $arr = array('5 2 10 20 90 200 100','10 2 1 1 2 1 1 1 1 1 1 6','7 3 20 10 40 30 60 50 10','6 3 5 4 6 2 1 9','8 4 8 5 7 9 8 6 7 5');
  for($i=0;$i<5;$i++)
  {
    $input=$arr;
  }
  $outarr=array('210 210','10 6','70 70 80','9 9 9','13 14 14 14');
  $out='';
  $input = '5
*/
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
				if(trim($details['output'])==$out) {
				echo "Successs";
					
					
					
        
		
		//echo $_POST['q"$i"'];
		
						{
									
									mysql_query( "update user_response set q$i=1 where id = '$user_id'") or die(mysql_error());
									mysql_query( "update members set score = score+10 where id = '$user_id'") or die(mysql_error());
						}
						
						
						$previous_page=$_SERVER['HTTP_REFERER'];
						header( "Location:.$previous_page" ) ;
						//$i=$i+1;
						//}
						//$id_user = $_SESSION['id'];
						//mysql_query("UPDATE members SET level_parameter = level_parameter+1 WHERE id='$id_user'");
						
						
						
									
									
								}
						else{
				
				
			
			//mysql_query( "update user_response set q$i=-1 where id = '$user_id'") or die(mysql_error());
			//mysql_query( "update members set score = score-1 where id = '$user_id'") or die(mysql_error());
			//$previous_page=$_SERVER['HTTP_REFERER'];
			//header( 'Location: '.$previous_page ) ;
		echo "Wrong Answer";	
				$i =  $_GET['id'];
				$refer = $i.".php";
		echo $refer;
		//$previous_page=$_SERVER['HTTP_REFERER'];
		header( "Location:$refer" ) ;
				}			
				
?>

<?php require_once("../includes/footer.php"); ?>