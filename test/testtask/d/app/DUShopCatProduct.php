<?php
/**
* 
**/
class DUShopCatProduct implements JsonSerializable, IDUDICommonItem, IDUDBItem {
	
	function __construct($title, $description, $idItem) {
		$this->title = $title;//:string
		$this->description = $description;//:string
		$this->idItem = $idItem;//:int
	}

	private $title;//:string
	private $description;//:string
	private $idItem;//:int
	
	
	public function get_title() {//:string
		return $this->$title;//:string
	}
	public function get_description() {//:string
		return $this->$description;//:string
	}
	public function get_idItem() {//:int
		return $this->$idItem;//:int
	}
	
	 public function jsonSerialize() {
		return (object) [
			't'=>$this->title//:string
			,'d'=>$this->description//:string
			,'i'=>$this->idItem//:int
		];
	 }
}
?>