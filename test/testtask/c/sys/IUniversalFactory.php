<?php
/**
* IMShopProducts
**/
interface IUniversalFactory {
	public function get_DUAORI($r, $aN, $layer, $type, $code);//:DUAORI
	public function get_DUAORIOnly($r);//:DUAORI
	
	public function get_DUShopCatProduct($title, $description, $idItem);//:DUAORI
	public function get_DUShopProduct($price, $title, $description, $idItem, $shopId);//:DUShopProduct
	
	}
?>