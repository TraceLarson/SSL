<?php
	
	class apiModel{
		public function __construct($parent){
			$this->db = $parent->db;
		}
		
		public function googleBooks($term=''){
			
			if(!class_exists('Google_Client')){
				require_once('google-api-php-client-2.2.2/vendor/autoload.php');
			}
			$client = new Google_Client();
			$client->setApplicationName("sslapi");
			$client->setDeveloperKey('AIzaSyAW6wwsYnZwt4Q_HqMhiJRoOcwozrq7Y0U');
			
			$service = new Google_Service_Books($client);
			
			$optParams = array('filter' => 'free-ebooks');
			$result = $service->volumes->listVolumes($term, $optParams);
			
			return $result;
		}
		
		public function facebook(){
		
		}
		
	}