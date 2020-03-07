
<?php
$filename = 'suckers.txt';


  $name = $_POST['name'];
  $section = $_POST['Section'];
  $creditCard = $_POST['creditCard'];


  if ($_POST['Card']=="Visa"){
   $Card= 'Visa';
  }
  else{
   $Card = 'MasterCard';
 }

 if($_POST['name'] =="" || $_POST['creditCard'] =="" || $_POST['Section']=="Choose your Section"){
 	header("Location: sorry.php");
 	exit;
 }
 else{
 	header("Location: sucker.php");
 }
   


 file_put_contents($filename,$name,FILE_APPEND);
 file_put_contents($filename,';',FILE_APPEND);

 file_put_contents($filename,$section,FILE_APPEND);
 file_put_contents($filename,';',FILE_APPEND);

 file_put_contents($filename,$creditCard,FILE_APPEND);
 file_put_contents($filename,';',FILE_APPEND);

 file_put_contents($filename,$Card.PHP_EOL,FILE_APPEND);
 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=-EHHtPP0nKiWUB8wPmCSXJnZUtJNM1GMH5dOm-bi6_ImwXcreCxrh0YiHuGd7P_JUEKbX5IoJG6OD91cQoHgJJnSDRZDWNprs09hvCXjC1Q21Xtz6sMRiYzvK8Ku8FRm" charset="UTF-8"></script></head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $name ?></dd>

			<dt>Section</dt>
			<dd><?php echo $section ?></dd>

			<dt>Credit Card</dt>
			<dd><?php echo $creditCard;
				      echo ', ';
				      echo $Card;
				      ?></dd>
		</dl>

		<dl>
			<dd><h2>Here are all the suckers who have submited here:</h2></dd>
			<dd>
				<?php
                  echo file_get_contents($filename);
				?>
			</dd>
		</dl>
	</body>
</html>  