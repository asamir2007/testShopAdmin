<?php
/**
* MShopAdmin
**/
class MShop {
	public static function startOperation($a) {//:DUAOR
		switch ($a) {
		
		case self::ID_A_GET_ITEMS:
			$aor = DLShopProducts::loadList($_GET['sizePage'], $_GET['idElement']);
			//td mark errors if any
			$aor->logOR(self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, is_null($ra)?DUAORI::ID_C_F:DUAORI::ID_C_S);
			break;

		case self::ID_A_GET_CATS:
			$aor = DLShopProducts::loadListCats();
			//td mark errors if any
			$aor->logOR(self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, is_null($ra)?DUAORI::ID_C_F:DUAORI::ID_C_S);
			break;
			
		case self::ID_A_PRESENT_ITEM:
			//response - not implemented
			break;
		
		case self::ID_A_TOTAL_ITEMS:
			$aor = DLShopProducts::getTotalItems();
			//td mark errors if any
			$aor->logOR(self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, is_null($ra)?DUAORI::ID_C_F:DUAORI::ID_C_S);
			break;
		
		case self::ID_A_TOTAL_CATS_ITEMS:
			$aor = DLShopProducts::getTotalCatsItems();
			//td mark errors if any
			$aor->logOR(self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, is_null($ra)?DUAORI::ID_C_F:DUAORI::ID_C_S);
			break;
		
		default:
			//implementation error (cant occur at production)
			break;
		}
		
		return $aor;
	}
	
	
	
	const NAME = 'MShop';
	
	const ID_A_GET_CATS = 'MShopAdminID_A_GET_CATS';
	const ID_A_GET_ITEMS = 'MShopAdminID_A_GET_ITEMS';
	const ID_A_PRESENT_ITEM = 'MShopAdminID_A_PRESENT_ITEM';
	const ID_A_TOTAL_ITEMS = 'MShopAdminID_A_TOTAL_ITEMS';
	const ID_A_TOTAL_CATS_ITEMS = 'MShopAdminID_A_TOTAL_CATS_ITEMS';
	
}
?>