<?php 
/*$con = mysqli_connect('localhost','root','','siwes_mgt');
if (!$con)
{
	echo "failed to connect to MYSQL ";
	
}
echo 'success';

//mysqli_select_db($con,'siwes_mgt')or die(mysqli_error());
*/
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'morphworth')or die(mysqli_error());

?>

<?php
/*
$host		= "localhost"; // Use Local Host Only      
$username	= "id10928026_root";
$password	= "12345"; 
$db_name	= "id10928026_slack"; 
 
$link = mysqli_connect($host, $username, $password, "team_elite");
 
if (!$link) {
 echo "Connection Error". PHP_EOL;
 echo "Error Code: ". mysqli_connect_errno().PHP_EOL;
 echo "Error: Description".mysqli_connect_error().PHP_EOL;
 exit;
}
//echo "Connection to 000webhost Successfull";
mysqli_select_db($link,'id10928026_slack')or die(mysqli_error());
*/
?>