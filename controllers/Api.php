<?php
	
	class Api extends AppController{
		
		public function __construct($parent) {
			$this->parent = $parent;
			$this->showApi();
		}
		
		public function showApi(){
			$this->getView('header');
			$this->getMenu();
			$data = $this->parent->getModel('apiModel')->googleBooks("Henry David Thoreau");
			$this->getView('api', $data);
			$this->getView('footer');
		}
		
		public function getMenu() {
			$menu = [
				'Home' => '/Welcome',
				'About' => '/About',
				'Contact' => '/Contact',
				'Api' => '/Api'
			];
			$data = [
				'CurrentPage' => 'Api',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
	}