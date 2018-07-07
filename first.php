


<?php
//	include "/bin/myclass.php";
	
	
	
	
	class myclass{
		
		public function __construct($number){
			echo 'constructor instantiated: '.$number;
			
		}
		
		public function myMethod($name="John"){
//			echo "<br>hello $name";
			echo '<br>';
			var_dump($_REQUEST);
			echo "name: ".$_REQUEST["name"];
		}
	}
	
	$mynewclass = new myclass(12345);
	$mynewclass->myMethod('Joe');
	
	
	class myClassStaticMethod{
		static function myStaticMethod(){
			echo '<br>I am static';
		}
	}
	
	myClassStaticMethod::myStaticMethod();
	
//	$myvar = ["num" => 1, "age" => 27, "another" => ["1",1]];
//	var_dump($myvar);
//
//	foreach ($myvar as $item) {
//		var_dump($item);
//		echo "-----------<br>";
//	}
//
//	for($i = 0; $i <10; $i++){
//
//		echo $i;
//	}
	
	
?>