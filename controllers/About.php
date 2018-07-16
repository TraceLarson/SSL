<?php
	class About extends AppController{

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct() {
			$this->getView("header");
			$this->getMenu();
			$this->getView("about");
			$this->getView('footer');
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
		
	}
?>