<?php
include 'ProductFactory.php';

class ShoppingCart {

	public  $productsInTheCart = array();
	private $productFactory;

	public function __construct() {
		$this->productFactory = new ProductFactory();
	}

	function add($productId) {
		$this->productsInTheCart[] = $this->productFactory->make($productId);
	}


}


$keypad ='keypad';
$keyboard = new ShoppingCart();
$keyboard->add($keypad);
echo $keyboard->productsInTheCart[0];
?>
