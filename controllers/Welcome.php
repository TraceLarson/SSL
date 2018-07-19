<?php
	
	class Welcome extends AppController {

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct() {
		
		}
		
		public function index(){
			$this->getView("header", array('pagename' => 'welcome'));
			$this->getMenu();
			$this->getView("welcome");
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