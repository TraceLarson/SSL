<?php
	
	class apiModel {
		public function __construct($parent) {
			$this->db = $parent->db;
			require_once('vendor/google/vendor/autoload.php');
			require_once('vendor/autoload.php');
			
		}
		
		public function googleBooks($term = '') {
			
			$client = new Google_Client();
			$client->setApplicationName("sslapi");
			$client->setDeveloperKey('AIzaSyAW6wwsYnZwt4Q_HqMhiJRoOcwozrq7Y0U');
			
			$service = new Google_Service_Books($client);
			
			$optParams = array('filter' => 'free-ebooks');
			$result = $service->volumes->listVolumes($term, $optParams);
			
			return $result;
		}
		
		
		
	}