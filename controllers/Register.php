<?php
	class Register extends AppController{
		
		public function __construct($parent) {
			$this->parent = $parent;
		}
		
		public function getMenu(){
			$menu = [
				'Home' => '/Welcome' ,
				'About' => '/About',
				'Contact' => '/Contact'
			];
			$data = [
				'CurrentPage' => 'About',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
		
		public function index(){
			$this->getView("header");
			$this->getMenu();
			$this->getView("registerForm");
			$this->getView('footer');
		}
		
		public function addAction(){
			$this->parent->getModel('users')->add(
				"INSERT INTO users (email, password, firstname, lastname, occupation, about) VALUES (:email,:password,:firstname,:lastname,:occupation,:about)",
				array(
					":email" => $_REQUEST["email"],
					":password" => sha1($_REQUEST["password"]),
					":firstname" => $_REQUEST["firstname"],
					":lastname" => $_REQUEST["lastname"],
					":occupation" => $_REQUEST["occupation"],
					":about" => $_REQUEST["about"]
				)
			);
			header("Location:/Welcome?msg=User Created");
		}
		
	}
?>