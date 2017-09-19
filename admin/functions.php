<?php

function pr($var){
  echo "<pre>".print_r($var)."</pre>";
}

function setLogged($user){
	if(empty($_SESSION["user"]) ){
		$_SESSION["user"] = $user;
	}
}

function checkLogged(){
	if(empty($_SESSION["user"]) ){
		header('Location: ./login.php');
	}
}

function checkLoginInformations($email, $password){
	if($email == "demo@degroofpetercam.be" && $password == "demo"){
		return ["email"=> $email, "password" => $password];
	} else {
		return false;
	}
	
}

?>
