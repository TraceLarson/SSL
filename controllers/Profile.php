<?php
	
	class Profile extends AppController {

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct($parent) {
			$this->parent = $parent;
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
			$data = $this->parent->getModel("users")->select(
				"SELECT * FROM users WHERE email = :email AND password = :password",
				array(":email"=>$_SESSION["data"]["email"],":password"=> $_SESSION["data"]["password"])
			);
			return $data[0];
		}
		
		public function showUpdateForm(){
			$this->getView("header");
			$this->getMenu();
			$this->getView('editProfile', $this->loadProfile());
			$this->getView('footer');
		}
		
		public function updateAction(){
			$this->parent->getModel('users')->update(
				"UPDATE users SET email = :email, firstname = :firstname, lastname = :lastname, occupation = :occupation, about = :about WHERE id = :id",
				array(
					":id" => $_REQUEST["id"],
					":email" => $_REQUEST["email"],
					":firstname" => $_REQUEST["firstname"],
					":lastname" => $_REQUEST["lastname"],
					":occupation" => $_REQUEST["occupation"],
					":about" => $_REQUEST["about"]
				)
			);
			header("Location:/Profile?msg=Profile Updated");
		}
		
		public function deleteAction(){
			$this->parent->getModel('users')->delete(
				"DELETE FROM users WHERE id = :id",
				array(":id" => $_REQUEST["id"])
			);
			header("Location:/Auth/logout?msg=Account Deleted");
		}
		
		public function updatePic() {
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