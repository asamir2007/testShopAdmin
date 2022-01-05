<?php
/**
* network connector 4 database
* $idOp is not implemented (intended 4 low memory consumption per each connector)
**/
class NCDBMySQL implements INCDatabase {


	public function connect($idOp) {//:bool
	}
	
	public function disconnect($idOp) {//:bool
	}
	
	public function query($idOp, $a) {//:* if result == null then error occoured
	}
	
	public function get_queryOpResultCode($idOp) {//:int 0 means no error
	}
	
	public function get_queryOpDBErrorDetails($idOp) {//:string	
	}
	
	private $db = null;
	private $dbHost = null;
	private $userName = null;
	private $userPassword = null;
	private $dbName = null;
	private $msg = "";

	
}
?>