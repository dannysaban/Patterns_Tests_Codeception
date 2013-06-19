<?php
interface  Cloudy{
		
	function getName();
	
	function setName();
}
//----------------------
abstract class MyCloud implements Cloudy{
	
	private  $price;
	
	 function getName(){
		return $this->price = "1";
	}
	
	 function setName(){
		return $this->price = "8948530";
		 
	
	}
	
}


//------------------------------
class Observer {
	function getObject($num){
		//substr($string, $start);
		if ($num == 1){
			return new Buyyer();
		}
		return new Seller();
	}
}

//------------------------------
class Buyyer extends MyCloud{
	function getMyCloud (){
		return $this->getName();
		
	}
}

class Seller extends MyCloud{
	function getMyCloud (){
		return $this->setName();
	}

}


//-------------test
$num = 4;
$getObserver = new Observer();
$get = $getObserver->getObject($num);
echo $myPrice = $get->getMyCloud();
$end =null;
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

