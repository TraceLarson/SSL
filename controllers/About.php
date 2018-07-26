<?php
	class About extends AppController{

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct($parent) {
			$this->parent = $parent;
//			$this->showList();
		
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
		
		public function getList(){
			$data = $this->parent->getModel('fruits')->select(
				"SELECT * FROM fruit_table"
			);
			return $data;
		}
		
		public function index(){
			$this->getView("header");
			$this->getMenu();
			$this->getView("about", $this->getList());
			$this->getView('footer');
		}
		
		public function showAddForm(){
			$this->getView("header");
			$this->getMenu();
			$this->getView("about", $this->getList());
			$this->getView("addForm");
			$this->getView('footer');
		}
		
		public function addAction(){
			
			$this->parent->getModel('fruits')->add(
				"INSERT INTO fruit_table (name) VALUES (:name)",
				array(":name" => $_REQUEST["name"])
			);
			header("Location:/About");
		}
		
	}
?>