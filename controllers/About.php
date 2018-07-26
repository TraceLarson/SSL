<?php
	class About extends AppController{
		
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
		
		public function edit(){
			$data = $this->parent->getModel('fruits')->select(
				"SELECT * FROM fruit_table WHERE id = :id",
				array(":id" =>$this->parent->urlPathParts[2])
			);
			$this->getView("header");
			$this->getMenu();
			$this->getView("editListItem", $data);
			$this->getView('footer');
		}
		
		public function updateAction(){
			$this->parent->getModel('fruits')->update(
				"UPDATE fruit_table SET name = :name WHERE id = :id",
				array(":name" => $_REQUEST["name"],":id" => $_REQUEST["id"])
			);

			header("Location:/About");

		}
		
		public function deleteAction(){
			$this->parent->getModel('fruits')->update(
				"DELETE FROM fruit_table WHERE name = :name AND id = :id",
				array(":name" => $_REQUEST["name"],":id" => $_REQUEST["id"])
			);
			
			header("Location:/About");
			
		}
		
	}
?>