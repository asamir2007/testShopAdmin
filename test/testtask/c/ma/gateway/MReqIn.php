<?php
/**
* server app entry point. performs basic routing
* MReqIn
**/
class MReqIn {
	public static function processReq() {
		//manually find route and perform action, u can always alter that later..
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {self::$rM = $_POST['m'];} else {self::$rM = $_GET['m'];}
		
		self::$rqFullPath = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
		
		switch (self::$rqFullPath[0]) {
		case 'item':
			self::pr_item_();
			break;
			
		case 'items':
			self::pr_items_();
			break;
		default:
			echo 'not implemented';
			break;
		}

	}
	private static $rM;
	private static $rqFullPath;
	
	private static function pr_item_() {
		//echo 'item id='.(self::$rqFullPath[1]==null).'<br/>';
		switch (self::$rqFullPath[1]) {
		case null:
			self::pr_item();
			break;
		default:
			self::pr_item_id();
			break;
		}
	}
	
	
	private static function pr_item() {
		//echo 'method:' . self::$rM;
		//echo '<br/>process item';
			
		switch (self::$rM) {
		case 'POST':
			$ar = MShopAdmin::startOperation(MShopAdmin::ID_A_ADD_ITEM);
			//set approp responce code
			//send JSON
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		default:
			echo '<br/>method not supported';
			break;
		}
	}
	
	private static function pr_item_id() {
		//echo 'method:' . self::$rM;
		//echo '<br/>process particular item';
		//echo '<br/>id:' . self::$rqFullPath[2];
			
		switch (self::$rM) {
		case 'DELETE':
			$ar = MShopAdmin::startOperation(MShopAdmin::ID_A_REMOVE_ITEM);
			//set approp responce code
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		case 'POST':
			$ar = MShopAdmin::startOperation(MShopAdmin::ID_A_UPDATE_ITEM);
			//set approp responce code
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		case 'HEAD':
			$ar = MShop::startOperation(MShopAdmin::ID_A_PRESENT_ITEM);
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		default:
			echo '<br/>method not supported';
			break;
		}
	}
	
	
	
	private static function pr_items_() {
		switch (self::$rqFullPath[1]) {
		case 'total':
			self::pr_items_total_();
			break;
		case 'cats':
			self::pr_items_cats_();
			break;
		default:
			self::pr_items();
			break;
		}
	}
	
	private static function pr_items() {
		switch (self::$rM) {
		case 'GET':
			$ar = MShop::startOperation(MShop::ID_A_GET_ITEMS);
			//check 4 internal server errors
			//set approp responce code
			//send JSON
			//echo 'JSON:<br/>';
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		default:
			//todo: reply 'not supported'
			break;
		}
	}
	private static function pr_items_total_() {
		switch (self::$rM) {
		case 'GET':
			$ar = MShop::startOperation(MShop::ID_A_TOTAL_ITEMS);
			//check 4 internal server errors
			//set approp responce code
			//send JSON
			//echo 'JSON:<br/>';
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		default:
			//todo: reply 'not supported'
			break;
		}
	}
	
	
	private static function pr_items_cats_() {
		switch (self::$rqFullPath[2]) {
		case 'total':
			self::pr_items_cats_total_();
			break;
		default:
			self::pr_items_cats();
			break;
		}
	}
	
	private static function pr_items_cats() {
		//echo 'method:' . self::$rM;
		//echo '<br/>get cats<br/>';
		
		switch (self::$rM) {
		case 'GET':
			$ar = MShop::startOperation(MShop::ID_A_GET_CATS);
			//check 4 internal server errors
			//set approp responce code
			//send JSON
			//echo 'JSON:<br/>';
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		default:
			//todo: reply 'not supported'
			break;
		}
	}
	private static function pr_items_cats_total_() {
		switch (self::$rM) {
		case 'GET':
			$ar = MShop::startOperation(MShop::ID_A_TOTAL_CATS_ITEMS);
			//check 4 internal server errors
			//set approp responce code
			//send JSON
			//echo 'JSON:<br/>';
			echo json_encode($ar->g_raw(), JSON_PRETTY_PRINT);
			break;
		default:
			//todo: reply 'not supported'
			break;
		}
	}
	
	
	

	
}
?>