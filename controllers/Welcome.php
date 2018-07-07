<?php
	class Welcome extends AppController{
	
//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
	public function __construct() {
		$this->getView("header",array("pagename" => "welcome"));
		$this->getMenu();
		$this->getView("welcome");
		$this->getView('footer');
	}
	
	public function getMenu(){
		$menu = [
			'Home' => '',
			'About' => '',
			'Contact' => ''
		];
		
		$this->getView('navigation', $menu);
	}
	
	}
?>