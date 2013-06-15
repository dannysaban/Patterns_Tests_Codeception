<?php 
/**/
abstract class Cloudy{

private static $name;

	public static function setName ($str){
	
		self::$name = $str;
	}
	
	public function getName (){
	
		return self::$name;
	}
}

class MyCloud extends Cloudy{
	
 	public function setGetMyName($name){
 		self::setName($name);
 		return $this->getName();
 	}
 	
 	public function fetchName(){
 	  return self::getName();
 	 
 	 }
}

class seeMe{
	public function getMe(){
		return new ViewMe();
	}
}

class ViewMe extends MyCloud {

	public  function viewName(){
 		return self::getName();
 	}
}







//---- test: initiating child class - for getting private data from abstract parent class
$cloudy = new MyCloud();
//$abstract->setMyName();
$cloudy-> setGetMyName("danny be good!!!");

$see = new seeMe();
$see->getMe()->viewName();echo  "<br>";

$cloudy2 = new MyCloud();
echo $cloudy2->fetchName();
//$abstract->setName("Danny");
//echo "nice!!!!!!!";
