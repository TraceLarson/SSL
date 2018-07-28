<?php
	
	class Facebook extends AppController{
		
		public function __construct($parent) {
			$this->parent = $parent;
			require_once('vendor/autoload.php');
		}
		
		public function index(){
			$this->getView('header');
			$this->getMenu();
			$this->getView('fbloginButton', $this->facebook());
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
				'CurrentPage' => 'Facebook',
				'Menu' => $menu
			];
			
			$this->getView('navigation', $data);
		}
		
		public function facebook(){
			return $this->parent->getModel('facebookModel')->FBlogin();
		}
		
		
		public function facebookLogin(){
			echo 'inside facebookLogin Controller<br>';
			$fb = new \Facebook\Facebook([
				'app_id' => '338414790032228',
				'app_secret' => '1b721d899b9c25147ecde88b822e5657',
				'default_graph_version' => 'v3.1',
				'default_access_token' => '27b9b7b59e0e24ba435420cdd8d94e0d', // optional
			]);
			
			$helper = $fb->getRedirectLoginHelper();
			
			try {
				$accessToken = $helper->getAccessToken();
			} catch(Facebook\Exceptions\FacebookResponseException $e) {
				// When Graph returns an error
				echo 'Graph returned an error: ' . $e->getMessage();
				echo $e->getCode();
				echo $e->getErrorType();
				exit;
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
				// When validation fails or other local issues
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;
			}
			
			if (! isset($accessToken)) {
				if ($helper->getError()) {
					header('HTTP/1.0 401 Unauthorized');
					echo "Error: " . $helper->getError() . "\n";
					echo "Error Code: " . $helper->getErrorCode() . "\n";
					echo "Error Reason: " . $helper->getErrorReason() . "\n";
					echo "Error Description: " . $helper->getErrorDescription() . "\n";
				} else {
					header('HTTP/1.0 400 Bad Request');
					echo 'Bad request';
				}
				exit;
			}
			
			// Logged in
			echo '<h3>Access Token</h3>';
			var_dump($accessToken->getValue());
			
			// The OAuth 2.0 client handler helps us manage access tokens
			$oAuth2Client = $fb->getOAuth2Client();
			
			// Get the access token metadata from /debug_token
			$tokenMetadata = $oAuth2Client->debugToken($accessToken);
			echo '<h3>Metadata</h3>';
			var_dump($tokenMetadata);
			
			// Validation (these will throw FacebookSDKException's when they fail)
			$tokenMetadata->validateAppId('338414790032228'); // Replace {app-id} with your app id
			// If you know the user ID this access token belongs to, you can validate it here
			//$tokenMetadata->validateUserId('123');
			$tokenMetadata->validateExpiration();
			
			if (! $accessToken->isLongLived()) {
				// Exchanges a short-lived access token for a long-lived one
				try {
					$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
				} catch (Facebook\Exceptions\FacebookSDKException $e) {
					echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
					exit;
				}
				
				echo '<h3>Long-lived</h3>';
				var_dump($accessToken->getValue());
			}
			
			$response = $fb->get('/me?fields=id,first_name, last_name, email, picture.type(large)', $accessToken);
			$userData = $response->getGraphNode()->asArray();
			$_SESSION['userData'] = $userData;
			$_SESSION['fb_access_token'] = (string) $accessToken;
			header('Location:/Facebook/facebookLoginSuccess');
			
		}
		public function facebookLoginSuccess(){
			$this->getView('header');
			$this->getMenu();
			$this->getView('login_success');
			$this->getView('footer');
		}
		
		
	}