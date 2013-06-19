<?php
interface  Cloudy{
		
	function getName();
	
	function setName($str);
}
//----------------------
abstract class MyCloud implements Cloudy{
	
	private static $price;
	
	function getName(){
		return self::$price;
	}
	
	function setName($str){
		self::$price = $str;
	
	}
	
}


//------------------------------
class Observer {
	function getObject($num){
		if ($num == 1){
			return new Buyyer();
		}
		return new Seller();
	}
}

//------------------------------
class Buyyer extends MyCloud{
	function getMyCloud (){
		return self::getName();
	}
}

class Seller extends MyCloud{
	private $str = 64673;
	function getMyCloud (){
		self::setName($this->str);
	}

}


//-------------test
//$num = 1;
//$getObserver = new Observer();
//$get = $getObserver->getObject($num);
//echo $get->getMyCloud();
//echo "<hr>";

//$mycloud = new MyCloud();
//$mycloud->setNameData($name = "danny 123");
//$mycloud->setNameData($name = "danny 4565345");
//echo $mycloud->getNameData();//ok

//echo "<hr>";
//MyCloud::setNameData($name ="you danny");ok
//MyCloud::setName($name ="you fucking danny");
//echo MyCloud::getName();
echo "<hr>";
//MyCloud::setName($name ="you fucking doron");
//echo MyCloud::getName();

