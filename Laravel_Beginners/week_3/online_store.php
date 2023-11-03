<?php 
class Product {
    private $name;
    private $imageURL;
    private $price;
    private $categories;

    public function __construct($name, $imageURL, $price) {
        $this->name = $name;
        $this->imageURL = $imageURL;
        $this->price = $price;
        $this->categories = array();
    }

    public function addCategory($category) {
        $this->categories[] = $category;
    }

    public function removeCategory($category) {
        $index = array_search($category, $this->categories);
        if ($index !== false) {
            unset($this->categories[$index]);
        }
    }

    // Other methods for accessing/modifying attributes
}

class Category {
    private $name;
    private $variants;

    public function __construct($name) {
        $this->name = $name;
        $this->variants = array();
    }

    public function addVariant($variant) {
        $this->variants[] = $variant;
    }

    public function removeVariant($variant) {
        $index = array_search($variant, $this->variants);
        if ($index !== false) {
            unset($this->variants[$index]);
        }
    }

    // Other methods for accessing/modifying attributes
}

class Variant {
    private $variantDetails;

    public function __construct($variantDetails) {
        $this->variantDetails = $variantDetails;
    }

    // Other methods for accessing/modifying attributes
}

class Cart {
    private $items;
    private $totalPrice;

    public function __construct() {
        $this->items = array();
        $this->totalPrice = 0;
    }

    public function addItem($product) {
        $this->items[] = $product;
        $this->totalPrice += $product->getPrice();
    }

    public function removeItem($product) {
        $index = array_search($product, $this->items);
        if ($index !== false) {
            $this->totalPrice -= $this->items[$index]->getPrice();
            unset($this->items[$index]);
        }
    }

    public function calculateTotalPrice() {
        return $this->totalPrice;
    }

    public function completePurchase() {
        // Logic for completing the purchase
    }

    // Other methods for managing the shopping cart functionality
}