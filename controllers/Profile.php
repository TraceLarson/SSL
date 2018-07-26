<?php
	
	class Profile extends AppController {

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct() {
			
			if (@$_SESSION["loggedin"] and @$_SESSION["loggedin"] == 1 /*|| @$_SESSION["loggedin"] == 2)*/) {
				// Loads index method
			} else {
				header("Location:/Welcome");
			}
		}
		
		public function index() {
			$this->getView("header");
			$this->getMenu();
			$this->getView('profile', $this->loadProfile());
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
		
		public function loadProfile() {
//			$lines = file('assets/profiles.txt');
//			$profiles = [];
//			foreach ($lines as $line) {
//				array_push($profiles, $line);
//			}
//			$currentProfile = explode("|", $profiles[@$_SESSION['loggedin'] - 1]);
//			return $currentProfile;
			echo 'profile loaded';
			
		}
		
		public function update() {
			if ($_FILES['img']['name'] != '') {
				$imageFileType = pathinfo('assets/' . $_FILES['img']['name'], PATHINFO_EXTENSION);
				
				if (file_exists('assets/' . $_FILES['img']['name'])) {
					echo 'Sorry, File Exists';
				} else {
					if ($imageFileType != 'jpg' and $imageFileType != 'png') {
						echo 'Sorry, This file type is not allowed';
					} else {
						if (move_uploaded_file($_FILES['img']['tmp_name'], "assets/" . $_FILES["img"]["name"])) {
							echo 'file uploaded';
						} else {
							echo 'error uploading';
						}
					}
				}
				
			}
			header('Location:/Profile?msg=File Uploaded');
		}
		
		
	}

?>