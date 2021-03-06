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
			$this->contact();
			$this->getView('footer');
		}
		
		public function getMenu() {
			$menu = [
				'Home' => '/Welcome',
				'About' => '/About',
				'Contact' => '/Contact',
				'BooksApi' => '/Api',
				'Facebook' => '/Facebook'
			];
			$data = [
				'CurrentPage' => 'Contact',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
		
//		public function displayForm($data = null) {
//			$this->getView('messageForm', $data);
//		}
		
		public function contact() {

//			$this->getView("header", array("pagename"=>"contact"));
			
			$random = substr(md5(rand()), 0, 7);
			
			$this->getView("messageForm", array("cap" => $random));
			
		}
		
		public function contactRecv() {
			
			$this->getView("header");
			$this->getMenu();
			
			if ($_POST['email'] == $_SESSION["email"]){
				
				if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
					
					echo "Email invalid";
					echo "<br><a href='/Contact'>Click here to go back</a>";
					
				} else {
					echo "Email valid";
				}
				
			}else{
				
				echo "Invalid captcha";
				echo "<br><a href='/Contact'>Click here to go back</a>";
				
			}

		}
		
		
//		public function receiveForm() {
//			$data = [
//				'email' => '',
//				'username' => '',
//			];
//			if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
//				$data['email'] = "is-valid";
//
//			} else {
//				$data['email'] = "is-invalid";
//				$data['success'] = 'alert-danger';
//
//			}
//			if (preg_match("/^[A-Za-z][A-Za-z0-9!@#$%^&*]*$/", $_POST['username'])) {
//				$data['username'] = "is-valid";
//			} else {
//				$data['username'] = "is-invalid";
//			}
//
//			$this->getView("header");
//			$this->getMenu();
//			$this->getView("contact");
//			$data['email'] and $data['username'] == 'is-valid' ? $this->getView('formConfirmation', $_POST) : $this->displayForm($data);
//			$this->getView('footer');
//		}
		
	}

?>