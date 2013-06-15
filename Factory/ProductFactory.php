<?php
include 'Keyboard.php';
include 'Mouse.php';

class ProductFactory {

	function make($productId) {
		if($this->isKeyboard($productId)) {
			$this->productsInTheCart[] = new Keyboard();
		} else {
			$this->productsInTheCart[] = new Mouse();
		}
	}

	private function isKeyboard($productId) {
		return substr($productId, 0, 1) == 'k';
	}
}

?>
