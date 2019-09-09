<?php

class item{
    var $id;
	var $name;
	var $price;
	var $quantity;
	
	function setItem($i, $n, $p, $q){
	$this->id = $i;
	$this->name = $n;
	$this->price = $p;
	$this->quantity = $q;
	}
}

class shoppingCart{
    var $items;
	var $totalprice;
	
	function get(){
		foreach ($this->items as $value){
			echo $value;
		}
	}
	
	function delete(){
		$this->items = array();
	}
	
	function add($item){
		array_push($this->items, $item);
	}
	
	function update($itemid, $quantity){
		foreach ($this->items as $value){
			if($value->id = $itemid){
				$value->quantity = $quantity;
			}
		}
	}
	
	function remove(itemid){
		foreach ($this->items as $value){
			if($value->id = $itemid){
				\unset($this->items[$key]);
			}
		}
	}
	
	function getTotalPrice(){
		$totalp = 0;
		foreach ($this->items as $value){
			$totalp += $value->quantity * $value->price;
		}
		return $totalp;
	}
	
	function sortBy($type){
		if($type == 'product_name'){
			usort($this->items, array($this, "cmpname"));
			return $this->items;
		}
		if($type == 'price'){
			usort($this->items, array($this, "cmpprice"));
			return $this->items;
		}
		if($type == 'quantity'){
			usort($this->items, array($this, "cmpquantity"));
			return $this->items;
		}
	}
	
	function cmpname($a, $b){
    return strcmp($a->name, $b->name);
	}
	
	function cmpprice($a, $b){
    return $a->price < $b->price;
	}
	
	function cmpquantity($a, $b){
    return $a->quantity < $b->quantity;
	}
}
?>