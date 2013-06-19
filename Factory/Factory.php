<?php


class ShoppingCart {

	public    $productsInTheCart = array();
	private   $productFactory;

	public function __construct() {
		$this->productFactory = new ProductFactory();
	}

	function add($productId) {
		$this->productsInTheCart[] = $this->productFactory->make($productId);
	}


}

class ProductFactory {
	
	public $productsInTheCart2;
	
	function make($productId) {
		$get = $this->isKeyboard($productId);
		if($get) {
			$this->productsInTheCart2 = new Keyboard();
		} else {
			$this->productsInTheCart2 = new Mouse();
		}
		
		return  $this->productsInTheCart2;
	}

	private function isKeyboard($productId) {
		return substr($productId, 0, 1) == 'e';
	}
}



interface Product {
	function getPrice();
	function getPicture();
	function getDescription();
}

class Keyboard implements Product {
	public function getDescription() {
		return "simple keyboard description";
	}

	public function getPicture() {
		return null;
	}

	public function getPrice() {
		return 50;
	}
}

class Mouse implements Product{
	public function getDescription() {
		return "simple mouse description";
	}

	public function getPicture() {

	}

	public function getPrice() {

	}
}

$keypad1 ='keypad';
$keypad2 ='eyepad';

$keyboard = new ShoppingCart();
$keyboard->add($keypad2);
//print_r( $keyboard->productsInTheCart[0]->getDescription());
echo "<br>";
//$keyboard2 = new ShoppingCart();
$keyboard->add($keypad1);
//print_r( $keyboard->productsInTheCart[1]->getDescription());
foreach ($get = $keyboard->productsInTheCart as $product){
	echo ($product->getDescription());
	echo "<br>";
};



