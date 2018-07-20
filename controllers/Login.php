<?php
	
	class Login extends AppController {
		
		public function __construct() {
		
		}
		
		public function index() {
			$this->getView('header');
			$this->getView('login');
			$this->getView('footer');
		}
		
		public function ajaxPars() {
//			var_dump($_POST);
			if ($_POST['username'] == "root" and $_POST['password'] == 123456) {
				echo "welcome";
			} else {
				echo "bad login";
			}
		}
		
	}