<?php
	class Contact extends AppController{

//		public function __construct($urlPathParts, $config) {
//			parent::__construct($urlPathParts, $config);
//		}
		public function __construct() {
			$this->getView("header");
			$this->getMenu();
			$this->getView("contact");
			$this->getView('footer');
		}
		
		public function getMenu(){
			$menu = [
				'Home' => '/Welcome' ,
				'About' => '/About',
				'Contact' => '/Contact'
			];
			$data = [
				'CurrentPage' => 'Contact',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
		
		public function contactRecv(){
			$this->getView("header");
			$this->getMenu();
			/* EMAIL VALIDATION
					 * if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
					 *  echo "email invalid";
					 * }else{
					 *  echo "email valid";
					 * }
					 *
					 */
			
			/*  REGEX FOR CHECKING PASSWORD VALIDATION
				 *
				 * if(preg_match("/^[a-zA-Z]*$/", $_POST["password"]){
				 *  echo "Select Different Password";
				 * }
				 */
			$this->getView('footer');
		}
		
		public function ajaxPars(){
			var_dump($_REQUEST);
			if($_REQUEST["email"]=="mike@aol.com"){
				echo "welcome";
			}else{
				echo "bad login";
			}
		}
		
	}
?>