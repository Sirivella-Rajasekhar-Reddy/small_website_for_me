<?php
session_start();
$err = '';

if(!empty($_POST["username"]) && !empty($_POST["pwd"])){
	
	require_once("rajalogin.class.php");
	$obj = new Login();	
	$res = $obj->checkLogin($_POST["username"],$_POST["pwd"]);

	if($res==1){
		$_SESSION["user"] = $_POST["username"];
		header('Location: rajahome.php');
	}else{
		$err = "Invalid Credentials";
	}
}
require_once("rajahead.php");
?>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h2>Login Page</h2>
		<form action="rajalogin.php" method="post">
			<input class="form-control" type="text" name="username" placeholder="Enter Username" /><br />
			<input type="password" class="form-control" name="pwd" placeholder="Enter Password" /><br />
			<input type="submit" value="Login" class="btn btn-outline-success" />
		</form>
			<?php
			if(!empty($err)){
				echo '<div class="alert alert-danger">'.$err.'</div>';
			}
			?>		
	</div>
	</div class="col-sm-3"></div>
</div>

<?php
require_once("rajafooter.php");
?>