<?php
	
	class Auth extends AppController {
		
		public function __construct() {
		
		}
		
		public function login() {
			if ($_REQUEST["username"] and $_REQUEST["password"]) {
				
				if ($_REQUEST["username"] == "mike@aol.com" and $_REQUEST["password"] == "password") {
					
					$_SESSION["loggedin"] = 1;
					header("Location:/Welcome");
				
				}elseif ($_REQUEST["username"] == "Joe@aol.com" and $_REQUEST["password"] == "password"){
					
					$_SESSION["loggedin"] = 2;
					
					header("Location:/Welcome");
					
				}else {
					header("Location:/Welcome?msg=Bad Login");
				}
			}else{
				header("Location:/Welcome?msg=Bad Login");
			}
		}
		
		public function logout(){
			session_destroy();
			header("Location:/Welcome");
		}
		
		
	}