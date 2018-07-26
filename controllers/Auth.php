<?php
	
	class Auth extends AppController {
		
		public function __construct($parent){
			$this->parent = $parent;
		}
		
		// 8cb2237d0679ca88db6464eac60da96345513964
		// 8cb2237d0679ca88db6464eac60da96345513964
		
		public function login(){
			
			if($_REQUEST["username"] and $_REQUEST["password"]){
				
				$data = $this->parent->getModel("users")->select(
					"SELECT * FROM users WHERE email = :email AND password = :password",
					array(":email"=>$_REQUEST["username"],":password"=>sha1($_REQUEST["password"]))
				);
				
				if($data){
					$_SESSION["loggedin"] = 1;
					$_SESSION["data"] = $data[0];
//					var_dump($_SESSION["data"]);
					header("Location:/Welcome");
				}else{
					header("Location:/Welcome?msg=bad login db");
				}
				
			}
			
		}
		
		
		public function logout(){
			session_destroy();
			header("Location:/Welcome");
		}
		
	}
	
	//				if ($_REQUEST["username"] == "mike@aol.com" and $_REQUEST["password"] == "password") {
	//
	//					$_SESSION["loggedin"] = 1;
	//					header("Location:/Welcome");
	//
	//				}elseif ($_REQUEST["username"] == "Joe@aol.com" and $_REQUEST["password"] == "password"){
	//
	//					$_SESSION["loggedin"] = 2;
	//
	//					header("Location:/Welcome");
	//
	//				}
	
	
//	public function __construct() {
//
//}
//
//	public function login() {
//	if ($_REQUEST["username"] and $_REQUEST["password"]) {
//
//		$lines = file('assets/profiles.txt');
//		$profiles = [];
//		foreach ($lines as $line){
//			array_push($profiles,explode("|",$line));
//		}
//
//		if ($_REQUEST["username"] == $profiles[0][0] and $_REQUEST["password"] == $profiles[0][1]) {
//
//			$_SESSION["loggedin"] = 1;
//			header("Location:/Welcome");
//
//		}elseif ($_REQUEST["username"] == $profiles[1][0] and $_REQUEST["password"] == $profiles[1][1]){
//
//			$_SESSION["loggedin"] = 2;
//			header("Location:/Welcome");
//
//		} else {
//			header("Location:/Welcome?msg=Bad Login");
//		}
//	}else{
//		header("Location:/Welcome?msg=Bad Login");
//	}
//}