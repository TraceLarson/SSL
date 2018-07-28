<?php
	
	class facebookModel {
		public function __construct($parent) {
			$this->db = $parent->db;
			require_once('vendor/autoload.php');
		}
		
		//facebook login link
		public function FBlogin() {
			$fb = new Facebook\Facebook([
				'app_id' => '338414790032228',
				'app_secret' => '1b721d899b9c25147ecde88b822e5657',
				'default_graph_version' => 'v3.1',
				'default_access_token' => '27b9b7b59e0e24ba435420cdd8d94e0d', // optional
			]);
			
			$helper = $fb->getRedirectLoginHelper();
			
			$permissions = ['email']; // Optional permissions
			$loginUrl = $helper->getLoginUrl('http://localhost/Facebook/faceBookLogin', $permissions);
//			echo '<a href="' . $loginUrl . '">View Your Facebook Info!</a>';
			return $loginUrl;
		}
		
	}