<?php

//*************interfaces

interface Cart {
	function getProducts();
}

interface CartGateway {
	function persist(ShoppingCart $cart);
	function retrieve($id);
	function getIdOfRecordedCart();
}

//************implementation of Cart Interfaces

class CartProxy implements Cart {
	private $shoppingCart;

	public function getProducts() {
		if(is_null($this->shoppingCart))
			$this->shoppingCart = $gateway->getCarts();
		return $this->shoppingCart->getProducts();
	}
}

class ShoppingCart implements Cart {
	private $products;

	public function getProducts() {
		return $this->products;
	}
}

//************implementation of CartGateway Interfaces

class FileCart implements CartGateway {
	private $fileId;

	public function __construct() {
		$this->fileId = uniqid();
	}

	public function getIdOfRecordedCart() {
		return $this->fileId;
	}

	public function persist(ShoppingCart $cart) {
		file_put_contents($this->fileId, serialize($cart));
	}

	public function retrieve($id) {
		return unserialize(file_get_contents($id));
	}
}

class InMemoryCart implements CartGateway {
	private $listOfCarts = array();

	public function getIdOfRecordedCart() {
		return end($this->listOfCarts);
	}

	public function persist(ShoppingCart $cart) {
		$this->listOfCarts[] = $cart;
	}

	public function retrieve($id) {
		return $this->listOfCarts[$id];
	}
}

//**************retriving data

class ShoppingHistory {
	private $gateway;
	private $shoppingCartIds = array();

	public function __construct(CartGateway $gateway, $ids = array()) {
		$this->gateway = $gateway;
		$this->shoppingCartIds = $ids;
	}

	function listAllCarts() {
		$shoppingCarts = array();

		foreach ($this->shoppingCartIds as $id) {
			$shoppingCarts[] = $this->gateway->retrieve($id);
		}

		return $shoppingCarts;
	}
}

$myShoppingCart = 
$myCartGate = new CartGateway(new ShoppingCart);
$myShopyHistory = new ShoppingHistory(new CartGateway, 101);
print_r($myShopyHistory->listAllCarts());



