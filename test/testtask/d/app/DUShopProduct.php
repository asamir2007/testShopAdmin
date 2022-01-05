<?php
/**
* 
**/
class DUShopProduct implements JsonSerializable, IDUShopProduct, IDUPrice, IDUDICommonItem, IDUDBItem, IDUShopProductBase {
	
	function __construct($price, $title, $description, $idItem, $shopId) {
		$this->price = $price;//:int
		$this->title = $title;//:string
		$this->description = $description;//:string
		$this->idItem = $idItem;//:int
		$this->shopId = $shopId;//:int
	}

	private $price;//:int
	private $title;//:string
	private $description;//:string
	private $idItem;//:int
	private $shopId;//:int
	
	
	public function get_price() {//:int
		return $this->$price;//:int
	}
	public function get_title() {//:string
		return $this->$title;//:string
	}
	public function get_description() {//:string
		return $this->$description;//:string
	}
	public function get_idItem() {//:int
		return $this->$idItem;//:int
	}
	public function get_shopId() {//:int
		return $this->$shopId;//:int
	}
	
	 public function jsonSerialize() {
		return (object) [
			 'p'=>$this->price//:int
			,'t'=>$this->title//:string
			,'d'=>$this->description//:string
			,'i'=>$this->idItem//:int
			,'s'=>$this->shopId//:int
		];
	 }
}
?>