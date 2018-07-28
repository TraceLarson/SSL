<?php
	
	class Api extends AppController{
		
		public function __construct($parent) {
			$this->parent = $parent;
			require_once('vendor/autoload.php');
//			$this->showBooksApi();
		}
		
		public function index(){
			$this->getView('header');
			$this->getMenu();
			$booksData = $this->parent->getModel('apiModel')->googleBooks("Henry David Thoreau");
			$this->getView('booksApi', $booksData);
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
				'CurrentPage' => 'Api',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
		
		
		
	}