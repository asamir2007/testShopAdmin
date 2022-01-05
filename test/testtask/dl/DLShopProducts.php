<?php

/**
* data loader
**/
class DLShopProducts {
		public static function loadListCats() {//:[DUShopCatProduct]
			global $uf;
			$opSuccess = true;
			$r = Array();
			
			//fill fromdb
			array_push($r, $uf->get_DUShopCatProduct(21,2,3));
			array_push($r, $uf->get_DUShopCatProduct(12,2,3));
			
			//td mark errors if any
			
			return $uf->get_DUAORI($r, self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, $opSuccess?DUAORI::ID_C_F:DUAORI::ID_C_S);
		}
		public static function getTotalCatsItems() {//:{n:int}
			global $uf;
			$opSuccess = true;
			$r = 99;
			//td mark errors if any
			return $uf->get_DUAORI($r, self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, $opSuccess?DUAORI::ID_C_F:DUAORI::ID_C_S);
		}
		
		public static function loadList($sizePage, $idElement) {//:[IDUShopProduct]
			global $uf;
			$opSuccess = true;
			$r = Array();
			
			//fill fromdb
			array_push($r, $uf->get_DUShopProduct(2,2,3,4,5));
			array_push($r, $uf->get_DUShopProduct(33,2,3,4,53));
			
			//td mark errors if any
			
			return $uf->get_DUAORI($r, self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, $opSuccess?DUAORI::ID_C_F:DUAORI::ID_C_S);
		}
		public static function getTotalItems() {//:{n:int}
			global $uf;
			$opSuccess = true;
			$r = 33;
			//td mark errors if any
			return $uf->get_DUAORI($r, self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, $opSuccess?DUAORI::ID_C_F:DUAORI::ID_C_S);
		}
		
		public static function addItem() {//
			$r = 'addItem';
			global $uf;
			$opSuccess = true;
			//td mark errors if any
			return $uf->get_DUAORI($r, self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, $opSuccess?DUAORI::ID_C_F:DUAORI::ID_C_S);
		}
		public static function removeItem() {//
			$r = 'removeItem';
			global $uf;
			$opSuccess = true;
			//td mark errors if any
			return $uf->get_DUAORI($r, self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, $opSuccess?DUAORI::ID_C_F:DUAORI::ID_C_S);
		}
		public static function updateItem() {//
			$r = 'updateItem';
			global $uf;
			$opSuccess = true;
			//td mark errors if any
			return $uf->get_DUAORI($r, self::NAME, DUAORI::ID_L_DP, DUAORI::ID_T_OP, $opSuccess?DUAORI::ID_C_F:DUAORI::ID_C_S);
		}
		
		const NAME = 'DLShopProducts';	
}

?>