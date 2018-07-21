<?php
	
	class Profile extends AppController {

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct() {
			if (@$_SESSION["loggedin"] and @$_SESSION["loggedin"] == 1){
				// Loads index method
			}else{
				header("Location:/Welcome");
			}
		}
		
		public function index(){
			$this->getView("header", array('pagename' => 'welcome'));
			$this->getMenu();
			echo 'This is a protected controller';
			$this->getView('footer');
		}
		
		public function getMenu() {
			$menu = [
				'Home' => '/Welcome',
				'About' => '/About',
				'Contact' => '/Contact'
			];
			$data = [
				'CurrentPage' => 'Welcome',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
		
		
	}

?>