<?php
/**
* MShopAdmin
**/
class MShopAdmin {
	public static function startOperation($a) {//:DUAORI
		switch ($a) {
		
		case self::ID_A_ADD_ITEM:
			$aor = DLShopProducts::addItem();
			//td mark errors if any
			$aor->logOR(self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, is_null($ra)?DUAORI::ID_C_F:DUAORI::ID_C_S);
			break;
		
		case self::ID_A_REMOVE_ITEM:
			$aor = DLShopProducts::removeItem();
			//td mark errors if any
			$aor->logOR(self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, is_null($ra)?DUAORI::ID_C_F:DUAORI::ID_C_S);
			break;
		case self::ID_A_UPDATE_ITEM:
			$aor = DLShopProducts::updateItem();
			//td mark errors if any
			$aor->logOR(self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, is_null($ra)?DUAORI::ID_C_F:DUAORI::ID_C_S);
			break;
		}
		
		//mark not found error
		return $aor;
	}
	
	
	
	const NAME = 'MShopAdmin';
	
	const ID_A_REMOVE_ITEM = 'MShopAdminID_A_REMOVE_ITEM';
	const ID_A_ADD_ITEM = 'MShopAdminID_A_ADD_ITEM';
	const ID_A_UPDATE_ITEM = 'MShopAdminID_A_UPDATE_ITEM';
	const ID_A_PRESENT_ITEM = 'MShopAdminID_A_PRESENT_ITEM';
	
}
?>