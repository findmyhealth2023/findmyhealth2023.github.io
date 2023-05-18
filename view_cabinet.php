<?php
require_once 'data_base.php';
$getid = $_GET['editid'];
$query = "SELECT * FROM cabinete WHERE complete_address ='$getid' ";
$result = mysqli_query($dbcon,$query);
$drow = @mysqli_fetch_assoc($result);
	$address = $drow['complete_address'];
   	$address = str_replace(" ", "+", $address);
?>
	<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
<?php
	
?>	

