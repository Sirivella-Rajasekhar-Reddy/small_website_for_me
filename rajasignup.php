<?php
$err = "";
$succ = "";
if(!empty($_POST["username"]) && !empty($_POST["pwd"])){
	try{
		$obj = new mysqli("localhost","root","","rajalogindb");
		
		$qry = $obj->prepare("insert into mydb1(username,pwd) values(?,?)");
		$qry->bind_param("ss",$_POST["username"],$_POST["pwd"]);
		
		if($qry->execute()){
			$succ = "Your Account has been Created.<a href='rajalogin.php' class='btn btn-primary'>Login Here</a>";
		}else{
			$err = "Please try again";
		}
	}catch(exception $e){
		$err = "Please try again..!";
	}
}

require_once("rajahead.php");
?>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h2>Sign-Up Page</h2>
		<form action="rajasignup.php" method="post">
			<input class="form-control" type="text" name="username" placeholder="Enter Username" /><br />
			<input type="password" class="form-control" name="pwd" placeholder="Enter Password" /><br />
			<input type="submit" value="Create an Account" class="btn btn-outline-success" />
		</form>
			<?php
			if(!empty($err)){
				echo '<div class="alert alert-danger">'.$err.'</div>';
			}
			if(!empty($succ)){
				echo '<div class="alert alert-success">'.$succ.'</div>';
			}			
			?>		
	</div>
	</div class="col-sm-3"></div>
</div>

<?php
require_once("rajafooter.php");
?>