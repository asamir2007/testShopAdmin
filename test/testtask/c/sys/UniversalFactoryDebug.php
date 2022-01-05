<?php
/**
* 
**/
class UniversalFactoryDebug implements IUniversalFactory {
	public function __construct($rsm) {
		$this->rsm = $rsm;
	}

	public function get_DUAORI($r, $aN, $layer, $type, $code) {//:DUAORI
		$aor = $this->get_DUAORIOnly($r);
		$aor->logOR($aN, $layer, $type, $code);
		return $aor;
	}
	public function get_DUAORIOnly($r) {//:IDUAORI
		switch ($this->rsm) {
		case null://4 faster output
		default:
			return new DUAORIP($r);
			break;
		case 'humanDebugger':
			return new DUAORI($r);
			break;
		}
	}
	
	public function get_DUShopCatProduct($title, $description, $idItem) {//:DUAORI
		return new DUShopCatProduct($title, $description, $idItem);
	}
	public function get_DUShopProduct($price, $title, $description, $idItem, $shopId) {//:DUShopProduct
		return new DUShopProduct($price, $title, $description, $idItem, $shopId);
	}
	
	protected $rsm;
}
?>