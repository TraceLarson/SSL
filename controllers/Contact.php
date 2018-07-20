<?php
	
	class Contact extends AppController {

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct() {
		
		}
		
		public function index() {
			$this->getView("header");
			$this->getMenu();
			$this->getView("contact");
			$this->displayForm();
			$this->getView('footer');
		}
		
		public function getMenu() {
			$menu = [
				'Home' => '/Welcome',
				'About' => '/About',
				'Contact' => '/Contact'
			];
			$data = [
				'CurrentPage' => 'Contact',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
		
		public function displayForm($data = null) {
			$this->getView('messageForm', $data);
		}


//		public function ajaxPars(){
////			var_dump($_POST);
//			if($_POST["email"]=="root@root.com"){
//				echo "welcome";
//			}else{
//				echo "bad login";
//			}
//		}
		
		public function receiveForm() {
			$data = [
				'email' => '',
				'username' => '',
			];
			if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){
				echo 'email valid'.'<br>';
				$data['email'] = "is-valid";
				
			} else {
				echo 'email invalid'.'<br>';
				$data['email'] = "is-invalid";
				$data['success'] = 'alert-danger';
				
			}
			if(preg_match("/^[A-Za-z][A-Za-z0-9!@#$%^&*]*$/", $_POST['username'])) {
				echo 'username valid'.'<br>';
				$data['username'] = "is-valid";
			} else {
				echo 'username invalid' . '<br>';
				$data['username'] = "is-invalid";
			}
			
			$this->getView("header");
			$this->getMenu();
			$this->getView("contact");
			$data['email'] and $data['username'] == 'is-valid' ? $this->getView('formConfirmation', $_POST) : $this->displayForm($data);
			$this->getView('footer');
		}
		
	}

?>