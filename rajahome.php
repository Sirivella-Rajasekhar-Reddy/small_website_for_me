<?php
session_start();
if(!empty($_SESSION["user"])){
	
	require_once("rajahead.php");
	require_once("rajamenu.php");
	
	echo "Hello ".$_SESSION["user"];
	?>
	<div class="card">
		<div class="card-header">Home</div>
		<div class="card-body">
		This is Home Page
		</div>
	</div>
	<?php	
	
	require_once("rajafooter.php");
}else{
	header("Location: rajalogin.php");
}
?>