<?php

class Login{
	public function checkLogin($username, $pwd){
		$return_val = 0;

		try{
			$obj = new mysqli("localhost","root","","rajalogindb");

			$qry = $obj->prepare("select username from mydb1 where username=? and pwd=?");
			$qry->bind_param("ss",$username,$pwd);
			
			if($qry->execute()){
				echo "exception";
				$qry->bind_result($usernames);
				echo "exception";
				while($qry->fetch()){
					$return_val = 1;
					echo "exception";
				}
			}
		}catch(exception $e){
			echo "exception";
		}	
		return $return_val;
	}
}

?>