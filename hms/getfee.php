
<?php 
$bd = mysqli_connect('localhost','root','','hms');
if($_GET['action']=='doctorid'){
	$docinfo=$_POST['docinfo'];
	$query= mysqli_query($bd,"select * from doctors where doctorName=$docinfo");
	$array=mysqli_fetch_array($query);
	echo $array['docFees'];
	
	}
	?>